<?php

class Headquarter{
    private $hq_id;
    private $hq_adress;
    private $hq_city;
    private $hq_cp;
    private $hq_country;

    public function __construct($hq_id, $hq_adress, $hq_city, $hq_cp, $hq_country){
        $this->hq_id        = $hq_id;
        $this->hq_adress    = $hq_adress;
        $this->hq_city      = $hq_city;
        $this->hq_cp        = $hq_cp;
        $this->hq_country   = $hq_country;
    }


    /**
     * Get the value of hq_id
     */ 
    public function getHq_id()
    {
        return $this->hq_id;
    }

    /**
     * Set the value of hq_id
     *
     * @return  self
     */ 
    public function setHq_id($hq_id)
    {
        $this->hq_id = $hq_id;

        return $this;
    }

    /**
     * Get the value of hq_adress
     */ 
    public function getHq_adress()
    {
        return $this->hq_adress;
    }

    /**
     * Set the value of hq_adress
     *
     * @return  self
     */ 
    public function setHq_adress($hq_adress)
    {
        $this->hq_adress = $hq_adress;

        return $this;
    }

    /**
     * Get the value of hq_city
     */ 
    public function getHq_city()
    {
        return $this->hq_city;
    }

    /**
     * Set the value of hq_city
     *
     * @return  self
     */ 
    public function setHq_city($hq_city)
    {
        $this->hq_city = $hq_city;

        return $this;
    }

    /**
     * Get the value of hq_cp
     */ 
    public function getHq_cp()
    {
        return $this->hq_cp;
    }

    /**
     * Set the value of hq_cp
     *
     * @return  self
     */ 
    public function setHq_cp($hq_cp)
    {
        $this->hq_cp = $hq_cp;

        return $this;
    }

    /**
     * Get the value of hq_country
     */ 
    public function getHq_country()
    {
        return $this->hq_country;
    }

    /**
     * Set the value of hq_country
     *
     * @return  self
     */ 
    public function setHq_country($hq_country)
    {
        $this->hq_country = $hq_country;

        return $this;
    }
}