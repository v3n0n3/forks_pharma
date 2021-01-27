<?php

class Detail{
    private $detail_invoice_id;
    private $detail_drug_id;
    private $detail_quantity;

    public function __construct($detail_invoice_id, $detail_drug_id, $detail_quantity)
    {
        $this->detail_invoice_id    = $detail_invoice_id;
        $this->detail_drug_id       = $detail_drug_id;
        $this->detail_quantity      = $detail_quantity;
    }


    /**
     * Get the value of detail_invoice_id
     */ 
    public function getDetail_invoice_id()
    {
        return $this->detail_invoice_id;
    }

    /**
     * Set the value of detail_invoice_id
     *
     * @return  self
     */ 
    public function setDetail_invoice_id($detail_invoice_id)
    {
        $this->detail_invoice_id = $detail_invoice_id;

        return $this;
    }

    /**
     * Get the value of detail_drug_id
     */ 
    public function getDetail_drug_id()
    {
        return $this->detail_drug_id;
    }

    /**
     * Set the value of detail_drug_id
     *
     * @return  self
     */ 
    public function setDetail_drug_id($detail_drug_id)
    {
        $this->detail_drug_id = $detail_drug_id;

        return $this;
    }

    /**
     * Get the value of detail_quantity
     */ 
    public function getDetail_quantity()
    {
        return $this->detail_quantity;
    }

    /**
     * Set the value of detail_quantity
     *
     * @return  self
     */ 
    public function setDetail_quantity($detail_quantity)
    {
        $this->detail_quantity = $detail_quantity;

        return $this;
    }
}
