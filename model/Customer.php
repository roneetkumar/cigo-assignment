<?php

class Customer
{

    public $fname = "";
    public $lname = "";
    public $email = "";
    public $phone = "";
    public $street = "";
    public $city = "";
    public $state = "";
    public $country = "";

    public function __construct($fname = null, $lname = null, $email = null, $phone = null, $street = null, $city = null, $state = null, $postal = null, $country = null)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postal = $postal;
        $this->country = $country;
    }

    public function insertOneCustomer($conn)
    {
        $fname = $this->fname;
        $lname = $this->lname;
        $email = $this->email;
        $phone = $this->phone;
        $street = $this->street;
        $city = $this->city;
        $state = $this->state;
        $postal = $this->postal;
        $country = $this->country;

        $sql = "INSERT INTO customer VALUES('$fname', '$lname', '$email', '$phone','$street','$city','$state','$postal','$country')";

        $result = $conn->exec($sql);

        return $result;

    }

}
