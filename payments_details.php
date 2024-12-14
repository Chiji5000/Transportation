    <?php
    include("./nav.php");

    $first_name = $_SESSION['payment-data']['first_name'] ?? null;
    $last_name = $_SESSION['payment-data']['last_name'] ?? null;
    unset($_SESSION['payment-data']);
    ?>


    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }
    </style>


    <section class="form__section mt-5 p-3">
        <div class="form_section-container mt-5">
            <?php if (isset($_SESSION['payment-success'])) : ?>
                <div class="alert alert-success alert-dismissible alert__message success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <p>
                        <?= $_SESSION['payment-success'];
                        unset($_SESSION['payment-success']);
                        ?>
                    </p>
                </div>
            <?php elseif (isset($_SESSION['payment'])) : ?>
                <div class="alert alert-danger alert-dismissible alert__message danger error">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <p>
                        <?= $_SESSION['payment'];
                        unset($_SESSION['payment']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
        </div>
    </section>

    <main class="container-fluid">
        <section class="contact-session pt-5">
            <h2 class="pt-5">Your'e A little bit there</h2>
            <p style="h3 mb-3 fw-normal">Just fill in the remaining details.......</p>
            <div class="form-signin w-100 m-auto">
                <form action="<?= ROOT_URL ?>payments_details_logic.php" method="POST">
                    <div class="form-floating">
                        <input type="text" name="first_name" value="<?= $first_name ?>" class="form-control" id="floatingInput" placeholder="First-name">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating pb-5">
                        <input type="text" name="last_name" value="<?= $last_name ?>" class="form-control" id="floatingPassword" placeholder="Last-name">
                        <label for="floatingPassword">Last Name</label>
                    </div>
                    <input type="submit" value="submit" name="submit" class=" w-100 btn btn-lg btn-primary">
                </form>
        </section>
        </div>
    </main>


    <?php
    include("./footer.php");
    ?>