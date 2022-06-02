<?php
session_start();

include('./commonFunctions.php');

//getting data:
//clean data:
$email = cleanData($_POST['email']);
$password = cleanData($_POST['password']);

//validation:

$errors = [];
$valid = true;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "NOT A VALID EMAIL";
    $valid = false;
}

if ($password == "" && !filter_var($password, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/.{6,25}/")))) {
    $errors['password'] = "NOT A VALID PASSWORD";
    $valid = false;
}

$_SESSION['errors'] = $errors;

if (isset($errors)) {
    header("Location: account.php");
}

if ($valid === true) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: products.php");
}

?>


<html>

<h1>hello</h1>

</html>