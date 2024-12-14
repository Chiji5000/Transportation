<?php
include 'partial/header.php';

$current_admin_id = $_SESSION['user-id'];

$query = "SELECT * FROM users WHERE NOT id=$current_admin_id";
$users = mysqli_query($connection, $query);
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
    <a href="<?= ROOT_URL ?>admin/add-user.php">Users</a>
    <a href="<?= ROOT_URL ?>admin/index.php">Transfers</a>
    <a href="<?= ROOT_URL ?>admin/manage-users.php" class="active">Manage Users</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunctions()">&#9776;</a>
</div>

<div style="padding-left:16px" class="container pt-5">
    <section class="dashboard">
        <?php if (isset($_SESSION['add-user-success'])) : ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success</strong> User Added Successfully.
            </div>
        <?php endif ?>
    </section>
    <h2 class="pb-3">Payment Table</h2>
    <div class="table-responsive">
        <?php if (mysqli_num_rows($users) > 0) : ?>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = mysqli_fetch_assoc($users)) : ?>
                        <tr>
                            <td><?= "{$user['email']}" ?></td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-user.php?id=<?= $user['id'] ?>" class="btn sn">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-user.php?id=<?= $user['id'] ?>" class=" btn sn danger">Delete</a></td>
                            <td><?= $user['is_admin'] ? 'Yes' : "No " ?></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        <?php else : ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Warning</strong> No Users Found.
            </div>
        <?php endif ?>
    </div>
    </main>
</div>
</div>
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