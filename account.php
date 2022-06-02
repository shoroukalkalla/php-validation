<?php


include('./navbar.php');

if (isset($_SESSION['email'])) {
    header("location: register.php");
}

if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo "<div class='alert alert-danger' role='alert'>" . $error . "</div>";
    }
}

session_destroy();
?>

<form class="form-group mt-5 w-50 m-auto text-center p-5" method="post" action="handleAccount.php">
    <input class="form-control" type="email" name="email" placeholder="please enter your email"><br />
    <input class="form-control" type="password" name="password" placeholder="please enter your password"><br />
    <input class="btn btn-primary " type="submit" value="Login" name="submit"><br />
</form>