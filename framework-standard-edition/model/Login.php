<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\table(name="Login")
 */

class Login
{
    /**
     * @orm:Column(type="string", nullable=false)
     * @assert:NotBlank
     */
    var $emailAddress;
    var $password;
    var $online;

    /**
     * Login constructor.
     * @param $emailAddress
     * @param $password
     * @param $online
     */
    public function __construct($emailAddress, $password, $online)
    {
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->online = $online;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @param mixed $online
     */
    public function setOnline($online)
    {
        $this->online = $online;
    }


}