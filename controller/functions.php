<?php

require_once dirname(dirname(__FILE__)) . '\model\Order.php';
require_once dirname(dirname(__FILE__)) . '\model\Customer.php';

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

    $customer->setOrder(new Order($type, $value));

    $ordered = $customer->insertOneOrder($conn);
    header("Location: ../index.php");

    // if ($ordered) {
    //     header("Location: ../index.html");
    //     // alert('Order Successful !');
    // } else {
    //     alert('Order Failed');
    //     header("Location: ../index.html");
    // }

}

function getCustomers($conn)
{
    $customers = [];

    $sql = "SELECT * from customer";
    $prepare = $conn->prepare($sql);
    $prepare->execute();
    $users = $prepare->fetchAll();

    if (sizeof($users) > 0) {
        foreach ($users as $key => $value) {
            $fname = $value['FirstName'];
            $lname = $value['LastName'];
            $email = $value['Email'];
            $phone = $value['Phone'];
            $street = $value['Street'];
            $city = $value['City'];
            $state = $value['State'];
            $postal = $value['Postal'];
            $country = $value['Country'];

            $type = $value['OrderType'];
            $value = $value['OrderValue'];
            // $date = $value['Date'];
            // $status = $value['Status'];

            $customer = new Customer($fname, $lname, $email, $phone, $street, $city, $state, $postal, $country);

            $order = new Order($type, $value);

            // $order->setDate($date);
            // $order->setStatus($status);

            $customer->setOrder($order);

            $customers[$key] = $customer;

        }
    } else {
        return null;
    }

    return $customers;
}

function alert($string)
{
    echo "<script>alert('$string')</script>";
}
