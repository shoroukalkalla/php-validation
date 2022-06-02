<?php

include "navbar.php";

if (isset($_SESSION['errors2'])) {
    foreach ($_SESSION['errors2'] as $error) {
        echo "<div class='alert alert-danger' role='alert'>" . $error . "</div>";
    }
}

session_destroy();
?>

<div class="container mt-5 text-center w-50 p-5">

    <form class="form-group" method="post" action="handleRegister.php">
        <input class="form-control" type="text" name="username" placeholder="enter your name"><br />
        <input class="form-control" type="password" name="password" placeholder="enter your password"><br />
        <input class="form-control" type="email" name="email" placeholder="enter your email"><br />
        <input class="form-control" type="text" name="phonenumber" placeholder="enter your phone number"><br />
        <input class="form-control" type="text" name="facebook" placeholder="enter your facebook"><br />
        <input class="form-control" type="text" name="twitter" placeholder="enter your twitter"><br />
        <input class="form-control" type="text" name="instagram" placeholder="enter your instagram">

        <input class="btn btn-success mt-2" type="submit" value="Update">
    </form>

</div>