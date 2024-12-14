<?php
require 'database.php';

if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transport Logistic">
    <meta name="author" content="Chijindu Iruke">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/all.min.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/dashboard.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">

    <title>Unox Transport PLC</title>
</head>

<body onload="myFunction()" style="margin:0;">

    <style>
        .selections {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #001d10;
            animation: animateBackgroundColor 10s linear infinite;
            z-index: 1000000000000000;
        }

        @keyframes animateBackgroundColor {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }

        .loading {
            position: relative;
            width: 250px;
            height: 250px;
        }

        .loading .blocks {
            position: absolute;
            width: 8px;
            height: 25px;
            background: #050c09;
            left: 50%;
            border-radius: 8px;
            transform: rotate(calc(18deg * var(--i)));
            transform-origin: 0 125px;
            animation: animate 1.9s ease-in-out infinite;
            animation-delay: calc(0.05s * var(--i));
        }

        @keyframes animate {

            0%,
            50% {
                background: #050c09;
                box-shadow: none;
            }

            50.1%,
            100% {
                background: #0f0;
                box-shadow: 0 0 5px #0f0,
                    0 0 15px #0f0,
                    0 0 30px #0f0,
                    0 0 60px #0f0,
                    0 0 90px #0f0;
            }
        }

        .h3s {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            letter-spacing: 2px;
            animation: animateText 2s ease-in-out infinite;
            animation-delay: -1s;
        }

        @keyframes animateText {

            0%,
            50% {
                color: #050c09;
                box-shadow: none;
            }

            50.1%,
            100% {
                color: #0f0;
                box-shadow: 0 0 5px #0f0,
                    0 0 15px #0f0;
            }
        }

        @media only screen and (max-width: 940px) {
            .navbar-brand {
                margin-top: -60px !important;
            }
        }

        .navbar-brand {
            width: 200px;
            height: 200px;
            background: none !important;
            display: flex !important;
            align-items: center !important;
            box-shadow: none !important;
        }

        .navbar-brand:hover {
            transform: translateX(40px);
            transition: 1.5s;
        }

        .navbar-brand img {
            width: 50%;
            height: 50%;
        }
        
    </style>
    <section class=" selections bg-black position-fixed translate-middle w-100 vh-100 top-50 start-50">
        <div class="loading">
            <div class="blocks" style="--i:1;"></div>
            <div class="blocks" style="--i:2;"></div>
            <div class="blocks" style="--i:3;"></div>
            <div class="blocks" style="--i:4;"></div>
            <div class="blocks" style="--i:5;"></div>
            <div class="blocks" style="--i:6;"></div>
            <div class="blocks" style="--i:7;"></div>
            <div class="blocks" style="--i:8;"></div>
            <div class="blocks" style="--i:9;"></div>
            <div class="blocks" style="--i:10;"></div>
            <div class="blocks" style="--i:11;"></div>
            <div class="blocks" style="--i:12;"></div>
            <div class="blocks" style="--i:13;"></div>
            <div class="blocks" style="--i:14;"></div>
            <div class="blocks" style="--i:15;"></div>
            <div class="blocks" style="--i:16;"></div>
            <div class="blocks" style="--i:17;"></div>
            <div class="blocks" style="--i:18;"></div>
            <div class="blocks" style="--i:19;"></div>
            <div class="blocks" style="--i:20;"></div>
            <h3 class="h3s">Loading</h3>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT_URL ?>index.php"><img src="<?= ROOT_URL ?>images/real-logo.png" alt="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Unox Transportations</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link s" aria-current="page" href="<?= ROOT_URL ?>services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link s" href="<?= ROOT_URL ?>about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link s" href="<?= ROOT_URL ?>contact.php">Contact Us</a>
                        </li>
                        <?php if (isset($_SESSION['user-id'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link s" href="<?= ROOT_URL ?>admin/index.php">Dashbord</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link s" href="<?= ROOT_URL ?>logout.php">Logout</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link s" href="<?= ROOT_URL ?>signup.php">Sign-Up</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>