<?php
include "./nav.php";

$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
unset($_SESSION['signup-data']);
?>

<?php
$username_email = $_SESSION['signin-data']['email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);
?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html,
    body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
    }

    ::selection {
        background: #1a75ff;
        color: #fff;
    }

    .wrapper {
        overflow: hidden;
        max-width: 390px;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        margin-top: 110px;
    }

    .wrapper .title-text {
        display: flex;
        width: 200%;
    }

    .wrapper .title {
        width: 50%;
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .slide-controls {
        position: relative;
        display: flex;
        height: 50px;
        width: 100%;
        overflow: hidden;
        margin: 30px 0 10px 0;
        justify-content: space-between;
        border: 1px solid lightgrey;
        border-radius: 15px;
    }

    .slide-controls .slide {
        height: 100%;
        width: 100%;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        line-height: 48px;
        cursor: pointer;
        z-index: 1;
        transition: all 0.6s ease;
    }

    .slide-controls label.signup {
        color: #000;
    }

    .slide-controls .slider-tab {
        position: absolute;
        height: 100%;
        width: 50%;
        left: 0;
        z-index: 0;
        border-radius: 15px;
        background: -webkit-linear-gradient(left, #003366, #004080, #0059b3, #0073e6);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type="radio"] {
        display: none;
    }

    #signup:checked~.slider-tab {
        left: 50%;
    }

    #signup:checked~label.signup {
        color: #fff;
        cursor: default;
        user-select: none;
    }

    #signup:checked~label.login {
        color: #000;
    }

    #login:checked~label.signup {
        color: #000;
    }

    #login:checked~label.login {
        cursor: default;
        user-select: none;
    }

    .wrapper .form-container {
        width: 100%;
        overflow: hidden;
    }

    .form-container .form-inner {
        display: flex;
        width: 200%;
    }

    .form-container .form-inner form {
        width: 50%;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-inner form .field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
    }

    .form-inner form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 15px;
        border-radius: 15px;
        border: 1px solid lightgrey;
        border-bottom-width: 2px;
        font-size: 17px;
        transition: all 0.3s ease;
    }

    .form-inner form .field input:focus {
        border-color: #1a75ff;
        /* box-shadow: inset 0 0 3px #fb6aae; */
    }

    .form-inner form .field input::placeholder {
        color: #999;
        transition: all 0.3s ease;
    }

    form .field input:focus::placeholder {
        color: #1a75ff;
    }

    .form-inner form .pass-link {
        margin-top: 5px;
    }

    .form-inner form .signup-link {
        text-align: center;
        margin-top: 30px;
    }

    .form-inner form .pass-link a,
    .form-inner form .signup-link a {
        color: #1a75ff;
        text-decoration: none;
    }

    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover {
        text-decoration: underline;
    }

    form .btn {
        height: 50px;
        width: 100%;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }

    form .btn .btn-layer {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right, #003366, #004080, #0059b3, #0073e6);
        border-radius: 15px;
        transition: all 0.4s ease;
        ;
    }

    form .btn:hover .btn-layer {
        left: 0;
    }

    form .btn input[type="submit"] {
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        background: none;
        border: none;
        color: #fff;
        padding-left: 0;
        border-radius: 15px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
    }
</style>

<section class="form__section mt-5 p-3">
    <div class="form_section-container mt-5">
        <?php if (isset($_SESSION['signup-success'])) : ?>
            <div class="alert alert-success alert-dismissible alert__message success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <p>
                    <?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['signin'])) : ?>
            <div class="alert alert-danger alert-dismissible alert__message danger error">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <p>
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['signup'])) : ?>
            <div class="alert alert-danger alert-dismissible alert__message danger error">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <p>
                    <?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                    ?>
                </p>
            </div>
        <?php endif ?>
    </div>
</section>

<div class="wrapper">
    <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
            <form action="<?= ROOT_URL ?>signin-logic.php" method="POST" class="login">
                <div class="field">
                    <input type="email" name="email" value="<?= $username_email ?>" placeholder="Email Address" required>
                </div>
                <div class="field">
                    <input type="password" name="password" value="<?= $password ?>" placeholder="Password" required>
                </div>
                <div class="pass-link"><a href="#">Forgot password?</a></div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login" name="submit">
                </div>
                <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            </form>
            <form action="<?= ROOT_URL ?>signup-logic.php" class="signup" method="POST">
                <div class="field">
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Email Address" required>
                </div>
                <div class="field">
                    <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Password" required>
                </div>
                <div class="field">
                    <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm password" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit" value="Signup">
                </div>
            </form>
        </div>
    </div>
</div>


<hr>

<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = () => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    };
    loginBtn.onclick = () => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    };
    signupLink.onclick = () => {
        signupBtn.click();
        return false;
    };
</script>


<?php
include "./footer.php";
?>