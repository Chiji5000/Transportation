<?php
require 'database.php';

if (isset($_POST['submit'])) {
    $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$first_name) {
        $_SESSION['payment'] = "Please enter your First Name";
    } elseif (!$last_name) {
        $_SESSION['payment'] = "Please enter your Last Name";
    } else {

    }


    if (isset($_SESSION['payment'])) {
        $_SESSION['payment-data'] = $_POST;
        header('location: ' . ROOT_URL . 'payments_details.php');
        die();
    } else {
        $insert_user_query = "INSERT INTO payments SET first_name='$first_name', last_name='$last_name'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            $_SESSION['payment-success'] = "Payments has been Successfully Registered..";
            header('location: ' . ROOT_URL . 'payment-success.php');
            die();
        }
    }
}else {
    header('location: ' . ROOT_URL . 'payments_details.php');
    die();
}

?>