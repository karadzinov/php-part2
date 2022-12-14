<?php

$errors = [];

if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
    $firstName = $_POST['firstName'];
} else {
    $errors["firstName"] = "Внесете име!";
}

if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
    $lastName = $_POST['lastName'];
} else {
    $errors["lastName"] = "Внесете презиме!";
}

if (isset($_POST['city']) && !empty($_POST['city'])) {
    $city = $_POST['city'];
} else {
    $errors["city"] = "Внесете град!";
}

if (isset($_POST['state']) && !empty($_POST['state'])) {
    $state = $_POST['state'];
} else {
    $errors["state"] = "Внесете држава!";
}

if (isset($_POST['zip']) && !empty($_POST['zip'])) {
    $zip = $_POST['zip'];
} else {
    $errors["zip"] = "Внесете поштенски број!";
}

if (isset($_POST['iagree']) && !empty($_POST['iagree'])) {
    $iagree = $_POST['iagree'];
} else {
    $errors["iagree"] = "Ве молиме согласете се со условите на користење";
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $errors["email"] = "Венесете емаил!";
}


if (!isset($_POST['password'])) {
    $errors["password"] = "Ве молиме изберете лозинка";
} else if (empty($_POST['password'])) {
    $errors["password"] = "Ве молиме изберете лозинка";
} else if ((strlen($_POST['password']) < 5)) {
    $errors["password"] = "Лозинката треба да содржи најмалку 6 карактери";
} else {
    $password = $_POST['password'];
}

if (empty($errors)) {
    $query = http_build_query($_POST, '', '&');
    header('Location: /success.php?'.$query);
} else {
    $message = http_build_query($errors, '', '&');
    header('Location: /index.php?' . $message);
}




