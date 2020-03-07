<?php

class Customer
{

    private $fname = "";
    private $lname = "";
    private $email = "";
    private $phone = "";
    private $street = "";
    private $city = "";
    private $state = "";
    private $country = "";
    private $order = null;

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

    public function insertOneOrder($conn)
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

        $type = $this->order->getType();
        $value = $this->order->getValue();
        $date = $this->order->getDate();
        $status = $this->order->getStatus();

        $sql = "INSERT INTO customer VALUES('$fname', '$lname', '$email', '$phone','$street','$city','$state','$postal','$country','$type','$value','$date','$status')";

        $result = $conn->exec($sql);

        return $result;

    }

    /**
     * Set the value of orders
     *
     * @return  self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Get the value of order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of lname
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Get the value of fname
     */
    public function getFname()
    {
        return $this->fname;
    }
}
