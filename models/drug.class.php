<?php

class Drug{
    private $drug_id;
    private $drug_name;
    private $drug_stock;
    private $drug_price;
    private $drug_dosage_id;

    public function __construct($drug_id, $drug_name, $drug_stock, $drug_price, $drug_dosage_id)
    {
        $this->drug_id          = $drug_id;
        $this->drug_name        = $drug_name;
        $this->drug_stock       = $drug_stock;
        $this->drug_price       = $drug_price;
        $this->drug_dosage_id   = $drug_dosage_id;
    }

    /**
     * Get the value of drug_id
     */ 
    public function getDrug_id()
    {
        return $this->drug_id;
    }

    /**
     * Set the value of drug_id
     *
     * @return  self
     */ 
    public function setDrug_id($drug_id)
    {
        $this->drug_id = $drug_id;

        return $this;
    }

    /**
     * Get the value of drug_name
     */ 
    public function getDrug_name()
    {
        return $this->drug_name;
    }

    /**
     * Set the value of drug_name
     *
     * @return  self
     */ 
    public function setDrug_name($drug_name)
    {
        $this->drug_name = $drug_name;

        return $this;
    }

    /**
     * Get the value of drug_stock
     */ 
    public function getDrug_stock()
    {
        return $this->drug_stock;
    }

    /**
     * Set the value of drug_stock
     *
     * @return  self
     */ 
    public function setDrug_stock($drug_stock)
    {
        $this->drug_stock = $drug_stock;

        return $this;
    }

    /**
     * Get the value of drug_price
     */ 
    public function getDrug_price()
    {
        return $this->drug_price;
    }

    /**
     * Set the value of drug_price
     *
     * @return  self
     */ 
    public function setDrug_price($drug_price)
    {
        $this->drug_price = $drug_price;

        return $this;
    }

    /**
     * Get the value of drug_dosage_id
     */ 
    public function getDrug_dosage_id()
    {
        return $this->drug_dosage_id;
    }

    /**
     * Set the value of drug_dosage_id
     *
     * @return  self
     */ 
    public function setDrug_dosage_id($drug_dosage_id)
    {
        $this->drug_dosage_id = $drug_dosage_id;

        return $this;
    }
}