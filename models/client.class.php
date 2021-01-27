<?php

class Client{
    private $client_business_id;
    private $client_name;
    private $client_email;
    private $client_agent;
    private $client_hq_id;

    public function __construct($client_business_id, $client_name, $client_email, $client_agent, $client_hq_id){
        $this->client_business_id   = $client_business_id;
        $this->client_name          = $client_name;
        $this->client_email         = $client_email;   
        $this->client_agent         = $client_agent;
        $this->client_hq_id         = $client_hq_id;
    }



    /**
     * Get the value of client_business_id
     */ 
    public function getClient_business_id()
    {
        return $this->client_business_id;
    }

    /**
     * Set the value of client_business_id
     *
     * @return  self
     */ 
    public function setClient_business_id($client_business_id)
    {
        $this->client_business_id = $client_business_id;

        return $this;
    }

    /**
     * Get the value of client_name
     */ 
    public function getClient_name()
    {
        return $this->client_name;
    }

    /**
     * Set the value of client_name
     *
     * @return  self
     */ 
    public function setClient_name($client_name)
    {
        $this->client_name = $client_name;

        return $this;
    }

    /**
     * Get the value of client_email
     */ 
    public function getClient_email()
    {
        return $this->client_email;
    }

    /**
     * Set the value of client_email
     *
     * @return  self
     */ 
    public function setClient_email($client_email)
    {
        $this->client_email = $client_email;

        return $this;
    }

    /**
     * Get the value of client_agent
     */ 
    public function getClient_agent()
    {
        return $this->client_agent;
    }

    /**
     * Set the value of client_agent
     *
     * @return  self
     */ 
    public function setClient_agent($client_agent)
    {
        $this->client_agent = $client_agent;

        return $this;
    }

    /**
     * Get the value of client_hq_id
     */ 
    public function getClient_hq_id()
    {
        return $this->client_hq_id;
    }

    /**
     * Set the value of client_hq_id
     *
     * @return  self
     */ 
    public function setClient_hq_id($client_hq_id)
    {
        $this->client_hq_id = $client_hq_id;

        return $this;
    }
}