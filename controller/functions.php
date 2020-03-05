<?php

function insertUser($conn)
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $type = $_POST['type'];
    $value = $_POST['value'];
    $date = $_POST['date'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $country = $_POST['country'];

    $customer = new Customer($fname, $lname, $email, $phone, $street, $city, $state, $postal, $country);

    $created = $customer->insertOneCustomer($conn);

    if ($created) {
        alert('Order Successful !');
    } else {
        alert('Order Failed');
    }

}

function alert($string)
{
    echo "<script>alert('$string')</script>";
}
