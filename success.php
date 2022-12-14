<?php
require_once "header.php";

$firstName = isset($_GET['firstName']) ? $_GET['firstName'] : '';
$lastName = isset($_GET['lastName']) ?  $_GET['lastName'] : '';
$email = isset($_GET['email']) ?  $_GET['email'] : '';
$password = isset($_GET['password']) ?  $_GET['password'] : '';
$city = isset($_GET['city']) ?  $_GET['city'] : '';
$state = isset($_GET['state']) ?  $_GET['state'] : '';
$zip = isset($_GET['zip']) ?  $_GET['zip'] : '';
$iagree = isset($_GET['iagree']) ? 1 : 0;


$data = [
    "firstName"     => $firstName,
    "lastName"     => $lastName,
    "email"        => $email,
    "password"     => $password,
    "city"         => $city,
    "state"        => $state,
    "zip"          => $zip,
    "iagree"       => $iagree
];

echo json_encode($data);


require_once "footer.php";