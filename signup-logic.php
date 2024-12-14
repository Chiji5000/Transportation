<?php
require 'database.php';

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


   if (!$email) {
        $_SESSION['signup'] = "Please enter your Email";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password should be 8+ Characters";
    } else {
        if ($createpassword !== $confirmpassword) {
            $_SESSION['sign_up'] = "Passwords do not match";
        } else {
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            $user_check_query = "SELECT * FROM users WHERE email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Email already exist";
            }
        }
    }


    if (isset($_SESSION['signup'])) {
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    } else {
        $insert_user_query = "INSERT INTO users SET email='$email', password='$hashed_password', is_admin=0";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            $_SESSION['signup-success'] = "Registration Successful. Please log in";
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}

?>