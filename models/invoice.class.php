<?php

class Invoice{
    private $invoice_id;
    private $invoice_date;
    private $invoice_client_id;

    public function __construct($invoice_id, $invoice_date, $invoice_client_id)
    {
        $this->invoice_id           = $invoice_id;
        $this->invoice_date         = $invoice_date;
        $this->invoice_client_id    = $invoice_date;
    }

    /**
     * Get the value of invoice_id
     */ 
    public function getInvoice_id()
    {
        return $this->invoice_id;
    }

    /**
     * Set the value of invoice_id
     *
     * @return  self
     */ 
    public function setInvoice_id($invoice_id)
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }

    /**
     * Get the value of invoice_date
     */ 
    public function getInvoice_date()
    {
        return $this->invoice_date;
    }

    /**
     * Set the value of invoice_date
     *
     * @return  self
     */ 
    public function setInvoice_date($invoice_date)
    {
        $this->invoice_date = $invoice_date;

        return $this;
    }

    /**
     * Get the value of invoice_client_id
     */ 
    public function getInvoice_client_id()
    {
        return $this->invoice_client_id;
    }

    /**
     * Set the value of invoice_client_id
     *
     * @return  self
     */ 
    public function setInvoice_client_id($invoice_client_id)
    {
        $this->invoice_client_id = $invoice_client_id;

        return $this;
    }
}