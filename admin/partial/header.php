<?php
require '../nav.php';
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}
