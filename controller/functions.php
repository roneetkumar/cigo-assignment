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

}

function getCustomers($conn)
{
    $customers = [];

    $sql = "SELECT * from customer";
    $prepare = $conn->prepare($sql);
    $prepare->execute();
    $users = $prepare->fetchAll();

    if (sizeof($users) > 0) {
        for ($i = 0; $i < count($users); $i++) {
            # code...
            $fname = $users[$i]['FirstName'];
            $lname = $users[$i]['LastName'];
            $email = $users[$i]['Email'];
            $phone = $users[$i]['Phone'];
            $street = $users[$i]['Street'];
            $city = $users[$i]['City'];
            $state = $users[$i]['State'];
            $postal = $users[$i]['Postal'];
            $country = $users[$i]['Country'];

            $type = $users[$i]['OrderType'];
            $value = $users[$i]['OrderValue'];

            $date = $users[$i]['OrderDate'];
            $status = $users[$i]['OrderStatus'];

            $customer = new Customer($fname, $lname, $email, $phone, $street, $city, $state, $postal, $country);

            $order = new Order($type, $value, $date, $status);

            $customer->setOrder($order);

            $customers[$i] = $customer;

        }
    } else {
        return null;
    }

    return $customers;
}

function changeStatus($conn)
{
    $email = $_POST['email'];
    $order_status = $_POST['order_status'];

    $sql = "UPDATE customer SET OrderStatus=? WHERE Email=?";
    $prepare = $conn->prepare($sql);
    $result = $prepare->execute([$order_status, $email]);

    header("Location: ../index.php");

}

function alert($string)
{
    echo "<script>alert('$string')</script>";
}
