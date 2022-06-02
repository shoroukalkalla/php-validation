<?php

session_start();

include('./commonFunctions.php');

//get data:
//clean data:
$username = cleanData($_POST['username']);
$password = cleanData($_POST['password']);
$email = cleanData($_POST['email']);
$phonenumber = cleanData($_POST['phonenumber']);
$facebook = cleanData($_POST['facebook']);
$twitter = cleanData($_POST['twitter']);
$instagram = cleanData($_POST['instagram']);

//validation:
$errors2 = array();
$valid = true;

//username
if (!preg_match("/^[a-zA-z]*$/", $username) && empty($username)) {
    $errors2['username'] = "NOT VALID USERNAME";
}

//email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors2['email'] = "NOT A VALID EMAIL";
    $valid = false;
}

//password
if ($password == "" && !filter_var($password, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/.{6,25}/")))) {
    $errors2['password'] = "NOT A VALID PASSWORD";
    $valid = false;
}

//phonenumber
if (!preg_match("/^01[0-2]{1}-[0-9]{8}$/", $phonenumber)) {
    $errors2['phonenumber'] = "NOT A VALID PHONE NUMBER";
    $valid = false;
}

//facebook
if (!filter_var($facebook, FILTER_VALIDATE_URL)) {
    $errors2['facebook'] = "NOT A VALID FACEBOOK";
    $valid = false;
}

//twitter
if (!filter_var($twitter, FILTER_VALIDATE_URL)) {
    $errors2['twitter'] = "NOT A VALID TWITTER";
    $valid = false;
}

//instagram
if (!filter_var($instagram, FILTER_VALIDATE_URL)) {
    $errors2['instagram'] = "NOT A VALID INSTAGRAM";
    $valid = false;
}

$_SESSION['errors2'] = $errors2;

if (isset($errors2)) {
    header("location: register.php");
}

if ($valid === true) {
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['phonenumber'] = $phonenumber;
    $_SESSION['facebook'] = $facebook;
    $_SESSION['twitter'] = $twitter;
    $_SESSION['instagram'] = $instagram;
    header("location: products,.php");
}
