<?php

require_once "./models/detail.class.php";
require_once "./models/dosage.class.php";
require_once "./models/drug.class.php";
require_once "./models/invoice.class.php";
require_once "./models/client.class.php";
require_once "./models/headquarter.class.php";
require_once "./models/user.class.php";

class Factory{

    /**
     * Method which returns an object of Dosage class
     *
     * @param [integer] $detail_invoice_id
     * @param [integer] $detail_drug_id
     * @param [integer] $detail_quantity
     * @return Detail object
     */
    public function createDetail($detail_invoice_id, $detail_drug_id, $detail_quantity)
    {
        return new Detail($detail_invoice_id, $detail_drug_id, $detail_quantity);
    }

    /**
     * Method which returns an object of Dosage class
     *
     * @param [integer] $dosage_id
     * @param [integer] $dosage_dosage
     * @param [string] $dosage_unit
     * @return Dosage object
     */
    public function createDosage($dosage_id, $dosage_dosage, $dosage_unit)
    {
        return new Dosage($dosage_id, $dosage_dosage, $dosage_unit);
    }

    /**
     * Method which returns an object of Drug class
     *
     * @param [integer] $drug_id
     * @param [string] $drug_name
     * @param [string] $drug_stock
     * @param [double] $drug_price
     * @param [integer] $drug_dosage_id
     * @return Drug object
     */
    public function createDrug($drug_id, $drug_name, $drug_stock, $drug_price, $drug_dosage_id){
        return new Drug ($drug_id, $drug_name, $drug_stock, $drug_price, $drug_dosage_id);
    }

    /**
     * Method which returns an object of Invoice class
     *
     * @param [integer] $invoice_id
     * @param [date] $invoice_date
     * @param [integer] $invoice_client_id
     * @return Invoice object
     */
    public function createInvoice($invoice_id, $invoice_date, $invoice_client_id)
    {
        return new Invoice($invoice_id, $invoice_date, $invoice_client_id);
    }

    /**
     * Method which returns an object of Client class
     *
     * @param [integer] $client_business_id
     * @param [string] $client_name
     * @param [string] $client_email
     * @param [string] $client_agent
     * @param [integer] $client_hq_id
     * @return Client object
     */
    public function createClient($client_business_id, $client_name, $client_email, $client_agent, $client_hq_id){
        return new Client($client_business_id, $client_name, $client_email, $client_agent, $client_hq_id);
    }

    /**
     * Method which returns an object of Headquarter class
     *
     * @param [integer] $hq_id
     * @param [string] $hq_adress
     * @param [string] $hq_city
     * @param [string] $hq_cp
     * @param [string] $hq_country
     * @return User object
     */
    public function createHeadquarter($hq_id, $hq_adress, $hq_city, $hq_cp, $hq_country){
        return new Headquarter($hq_id, $hq_adress, $hq_city, $hq_cp, $hq_country);
    }

    /**
     * Method which returns an object of User class
     *
     * @param [integer] $user_id
     * @param [string] $user_surname
     * @param [string] $user_firstname
     * @param [string] $user_password
     * @param [string] $user_email
     * @param [boolean] $user_status
     * @return User object
     */
    public function createUser($user_id, $user_surname, $user_firstname, $user_password, $user_email, $user_status)
    {
        return new User($user_id, $user_surname, $user_firstname, $user_password, $user_email, $user_status);
    }

}