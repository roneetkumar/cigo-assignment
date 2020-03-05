<?php

require_once '../model/Customer.php';
require_once '../model/Order.php';
require_once './dbconfig.php';
require_once './functions.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if (isset($_POST['submit'])) {
        insertUser($conn);
    }
} catch (SQLExecption $error) {
    echo $connection->Error[2];
}
