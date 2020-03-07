<?php

require_once dirname(dirname(__FILE__)) . '\controller\dbconfig.php';
require_once dirname(dirname(__FILE__)) . '\controller\functions.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if (isset($_POST['submit'])) {
        insertUser($conn);
    }

    $customers = getCustomers($conn);

} catch (SQLExecption $error) {
    echo $connection->Error[2];
}
