<?php

class Dosage{
    private $dosage_id;
    private $dosage_dosage;
    private $dosage_unit;

    public function __construct($dosage_id, $dosage_dosage, $dosage_unit)
    {
        $this->dosage_id        = $dosage_id;
        $this->dosage_dosage    = $dosage_dosage;
        $this->dosage_unit      = $dosage_unit;
    }

    /**
     * Get the value of dosage_id
     */ 
    public function getDosage_id()
    {
        return $this->dosage_id;
    }

    /**
     * Set the value of dosage_id
     *
     * @return  self
     */ 
    public function setDosage_id($dosage_id)
    {
        $this->dosage_id = $dosage_id;

        return $this;
    }

    /**
     * Get the value of dosage_dosage
     */ 
    public function getDosage_dosage()
    {
        return $this->dosage_dosage;
    }

    /**
     * Set the value of dosage_dosage
     *
     * @return  self
     */ 
    public function setDosage_dosage($dosage_dosage)
    {
        $this->dosage_dosage = $dosage_dosage;

        return $this;
    }

    /**
     * Get the value of dosage_unit
     */ 
    public function getDosage_unit()
    {
        return $this->dosage_unit;
    }

    /**
     * Set the value of dosage_unit
     *
     * @return  self
     */ 
    public function setDosage_unit($dosage_unit)
    {
        $this->dosage_unit = $dosage_unit;

        return $this;
    }
}