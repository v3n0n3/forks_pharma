<?php

class user{
    private $user_id;
    private $user_surname;
    private $user_firstname;
    private $user_password;
    private $user_email;
    private $user_status;

    public function __construct($user_id, $user_surname, $user_firstname, $user_password, $user_email, $user_status){
        $this->user_id          = $user_id;
        $this->user_surname     = $user_surname;
        $this->user_firstname   = $user_firstname;
        $this->user_password    = $user_password;
        $this->user_status      = $user_status;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }
    
    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of user_surname
     */ 
    public function getUser_surname()
    {
        return $this->user_surname;
    }

    /**
     * Set the value of user_surname
     *
     * @return  self
     */ 
    public function setUser_surname($user_surname)
    {
        $this->user_surname = $user_surname;

        return $this;
    }

    /**
     * Get the value of user_firstname
     */ 
    public function getUser_firstname()
    {
        return $this->user_firstname;
    }

    /**
     * Set the value of user_firstname
     *
     * @return  self
     */ 
    public function setUser_firstname($user_firstname)
    {
        $this->user_firstname = $user_firstname;

        return $this;
    }

    /**
     * Set the value of user_password
     *
     * @return  self
     */ 
    public function setUser_password($user_password)
    {
        $this->user_password = $user_password;

        return $this;
    }

    /**
     * Get the value of user_email
     */ 
    public function getUser_email()
    {
        return $this->user_email;
    }

    /**
     * Set the value of user_email
     *
     * @return  self
     */ 
    public function setUser_email($user_email)
    {
        $this->user_email = $user_email;

        return $this;
    }

    /**
     * Get the value of user_status
     */ 
    public function getUser_status()
    {
        return $this->user_status;
    }

    /**
     * Set the value of user_status
     *
     * @return  self
     */ 
    public function setUser_status($user_status)
    {
        $this->user_status = $user_status;

        return $this;
    }


}