<?php
/**
 * Created by PhpStorm.
 * User: rmill_000
 * Date: 13/04/2017
 * Time: 09:23
 */

Namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="contactus")
*/
Class ContactUsEntity
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $firatname;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lastname;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $subject;
    /**
     * @ORM\Column(type="text")
     */
    protected $message;


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setID($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getFiratname()
    {
        return $this->firatname;
    }

    /**
     * @param mixed $firatname
     */
    public function setFiratname($firatname)
    {
        $this->firatname = $firatname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}