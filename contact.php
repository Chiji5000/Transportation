<?php
include "./nav.php";
?>

<main class="container-fluid">
    <section class="contact-session pt-5">
        <h2 class="pt-5">Contact Us</h2>
        <p>We are always available to assist you. Our Omni-Channel contact <br>centre agents are available 24/7 to support you.<br> Don't wait to be stranded to contact us.</p>
    </section>


    <div class="container-fluid page-header mb-5">
        <center>
            <div class="row box">
                <img src="./images/waiting.jpg" alt="">
            </div>
        </center>
    </div>




    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
    </div>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Address</p>
                            <h5 class="mb-0">123 Street, Warri, Delta State</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Contact Us</p>
                        <h1 class="mb-4">Have Any Query? Please Contact Us!</h1>
                        <p class="mb-4">The contact form is for enquires. Don't be shy to contact us today, we are always active to pick you calls or reply you're emails today.</p>
                        <form action="<?= ROOT_URL ?>sendmail.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15885.046661203298!2d5.715560287158212!3d5.528144500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b2af04783053%3A0xfbb8686e4a54ca0e!2sWord%20of%20Life%20Bible%20Church!5e0!3m2!1sen!2sng!4v1722428535138!5m2!1sen!2sng" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</main>

<div class="d-flex flex-column flex-sm-row justify-content-between py-1 my-1 border-top payments-patterns">
</div>

<div class="container-fluid payments-pattern p-5">
    <img src="./images/MasterCard_Logo.svg.png" alt="">
    <img src="./images/glo.png" alt="">
    <img src="./images/verve-icon-2048x709-8iunu5yi.png" alt="">
    <img src="./images/Visa-Logo-2006.png" alt="">
</div>

<div class="d-flex flex-column flex-sm-row justify-content-between py-1 my-1 border-top">
</div>
<?php
include "./footer.php";
?>