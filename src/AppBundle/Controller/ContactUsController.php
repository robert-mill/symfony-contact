<?php
/**
 * Created by PhpStorm.
 * User: rmill_000
 * Date: 13/04/2017
 * Time: 09:27
 */
Namespace AppBundle\Controller;
use AppBundle\Entity\ContactUsEntity;
use Symfony\Component\Form\FormBuilderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


Class ContactUsController extends Controller
{
    /**
     * @Route("/contact-us", name="contact-us")
     */
    function contactUsForm(FormBuilderInterface $builder=NULL, array $options=NULL,Request $request){
        $contactUsEntity = new ContactUsEntity();
        $user = new ContactUsEntity();

        $form = $this->createFormBuilder()
        ->setAction($this->generateUrl('contact-us'))
        ->add('firstname', TextType::class, array('label' => 'First Name','data' => $user->getFiratname()))
        ->add('lastname', TextType::class, array('label' => 'Last Name','data' =>  $user->getLastname()))
        ->add('email', TextType::class, array('label' => 'Email','data' => $user->getEmail()))
        ->add('subject', TextType::class, array('label' => 'Subject','data' => $user->getSubject()))
        ->add('message', TextType::class, array('label' => 'Message','data' => $user->getMessage()))
        ->add('save', SubmitType::class, array('label'=>'Generaterows'))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            var_dump($form->getData());



            $data = $form->getData();


            $user->setFiratname($data['firstname']);
            $user->setLastname($data['lastname']);
            $user->setEmail($data['email']);
            $user->setSubject($data['subject']);
            $user->setMessage($data['message']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // we'll redirect the user next...
        }
        return $this->render('contact/contact.html.twig', array(
            'form' =>  $form->createView(),
            'users' => $user
        ));

    }


}