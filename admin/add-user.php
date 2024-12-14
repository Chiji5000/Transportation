<?php
include 'partial/header.php';

$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;

unset($_SESSION['add-user-data']);
?>

<style>
    nav {
        display: none !important;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 34px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .active {
        background-color: #04AA6D;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    .dropdowns {
        float: left;
        overflow: hidden;
    }

    .dropdowns .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .topnav a:hover,
    .dropdowns:hover .dropbtn {
        background-color: #555;
        color: white;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 600px) {

        .topnav a:not(:first-child),
        .dropdown .dropbtn {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav.responsive .dropdowns {
            float: none;
        }

        .topnav.responsive .dropdown-content {
            position: relative;
        }

        .topnav.responsive .dropdowns .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }
    }
</style>

<div class="topnav" id="myTopnav">
    <a href="<?= ROOT_URL ?>index.php">Home</a>
    <a href="<?= ROOT_URL ?>admin/add-user.php" class="active">Users</a>
    <a href="<?= ROOT_URL ?>admin/index.php">Transfers</a>
    <a href="<?= ROOT_URL ?>admin/manage-users.php">Manage Users</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunctions()">&#9776;</a>
</div>

<div class="container">
    <?php if (isset($_SESSION['add-user'])) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Warning</strong>Check Your Form.
        </div>
    <?php endif ?>
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../images/real-logo.png" alt="" width="72" height="57">
            <h2>Create a new user from the admin Section</h2>
            <p class="lead">This is the way you can create or add a new user to join the admin, its just so simple just write their name and then sign them in.</p>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Register Your new User Admin</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Create User</h4>
                <form class="needs-validation" action="<?= ROOT_URL ?>admin/add-user-logic.php" method="POST" novalidate>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" value="<?= $email ?>" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Enter Password</label>
                            <input type="password" class="form-control" name="createpassword" value="<?= $createpassword ?>" id="password" placeholder="Password" required>
                            <div class="invalid-feedback">
                                Please enter your password
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="address" class="form-label">Confirm Passord</label>
                            <input type="password" class="form-control" name="confirmpassword" value="<?= $confirmpassword ?>" id="password" placeholder="Confirm Password" required>
                            <div class="invalid-feedback">
                                Please make sure passwords match
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Choose choice</label>
                            <select class="form-select" name="userrole" id="country" required>
                                <option>Choose...</option>
                                <option value="0">Normal Person</option>
                                <option value="1">Admin</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid role.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Add User</button>
                </form>
            </div>
        </div>
    </main>
</div>

<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
</div>

<script>
    function myFunctions() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<?php
include 'partial/footer.php';
?>