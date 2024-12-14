<?php
include "./nav.php";
?>

<?php
require 'vendor/autoload.php';
?>


<style>
    .select {
        text-align: center;
        font-size: 2.3rem;
        font-weight: 500;
        padding-bottom: 10px;
    }

    .search-trans {
        width: 100%;
        background-color: whitesmoke;
        height: 200px !important;
        margin-inline: auto !important;
        display: flex;
        justify-content: center !important;
        align-items: center;
        padding: 150px 100PX;
    }

    select {
        width: 300px;
        border: none;
        height: 50px;
        font-weight: 500;
        margin: 10px;
    }

    .search-trans input {
        margin: 10px;
    }

    .search-trans input[type='date'] {
        width: 300px;
        border: none;
        height: 50px;
        font-weight: 500;
    }

    .search-trans input[type='submit'] {
        width: 300px;
        border: 2px solid red;
        height: 50px;
        font-weight: 600;
        background-color: yellow;
        color: red;
        font-size: 1.3rem;
    }

    .search-trans input[type='submit']:hover {
        width: 300px;
        border: 2px solid yellow;
        height: 50px;
        font-weight: 600;
        background-color: red;
        color: yellow;
        font-size: 1.3rem;
    }

    @media only screen and (min-width: 940px) {
        .selects {
            display: none;
        }
    }

    @media only screen and (max-width: 380px) {

        .search-trans {
            margin-top: 68px !important;
        }
    }

    @media only screen and (max-width: 940px) {
        #result {
            color: red;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .select {
            padding-top: 20px;
            text-align: center;
            font-size: 2.3rem;
            font-weight: 500;
            display: none;
        }

        .selects {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 800;
        }

        .search-trans {
            width: 100%;
            background-color: whitesmoke;
            height: auto !important;
            display: flex;
            flex-direction: column;
            justify-content: center !important;
            align-items: center;
            padding: 100px;
            margin-top: 48px;
        }

        select {
            width: 100%;
            border: none;
            height: 50px;
            font-weight: 500;
            margin: 10px;
        }

        .search-trans input {
            margin: 10px;
        }

        .search-trans input[type='date'] {
            width: 100%;
            border: none;
            height: 50px;
            font-weight: 500;
        }

        .search-trans input[type='submit'] {
            width: 100%;
            border: 2px solid red;
            height: 50px;
            font-weight: 600;
            background-color: yellow;
            color: red;
            font-size: 1.3rem;
        }

        .search-trans input[type='submit']:hover {
            width: 300px;
            border: 2px solid yellow;
            height: 50px;
            font-weight: 600;
            background-color: red;
            color: yellow;
            font-size: 1.3rem;
        }
    }

    .wrappers {
        width: 80%;
        /* transform: translate(-50%, -50%); */
        display: flex;
        justify-content: space-around;
        gap: 10px;
        margin-inline: auto;
    }

    .containers {
        width: 28vmin;
        height: 28vmin;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 1em 0;
        font-size: 16px;
        border-radius: 0.5em;
        background-color: #21242b;
        border-bottom: 10px solid crimson;
    }

    .fa-utensils,
    .fa-smile-beam,
    .fa-list,
    .fa-star {
        color: darkorange;
        font-size: 2.5em;
        text-align: center;
    }

    span.num {
        color: #ffffff;
        display: grid;
        place-items: center;
        font-weight: 600;
        font-size: 3em;
    }

    span.texts {
        color: #e0e0e0;
        font-size: 1em;
        text-align: center;
        pad: 0.7em 0;
        font-weight: 400;
        line-height: 0;
    }

    @media screen and (max-width: 1024px) {
        .wrappers {
            width: 85%;
        }

        .containers {
            height: 26vmin;
            width: 26vmin;
            font-size: 12px;
        }
    }

    @media screen and (max-width: 768px) {
        .wrappers {
            width: 90%;
            flex-wrap: wrap;
            gap: 30px;
        }

        .containers {
            width: calc(50% - 40px);
            height: 30vmin;
            font-size: 14px;
        }
    }

    @media screen and (max-width: 480px) {
        .wrappers {
            gap: 15px;
        }

        .containers {
            width: 100%;
            height: 25vmin;
            font-size: 8px;
        }
    }

    #result {
        color: red;
        font-weight: 700;
        font-size: 2.3rem;
        text-align: center;
    }

    .pay {
        display: none;
    }

    button.pay {
        color: white !important;
        width: 120px;
        height: 50px;
        border: none;
        background-color: crimson;
        text-transform: uppercase;
    }

    button.pay:hover {
        color: crimson !important;
        background-color: white;
        border: 2px solid crimson;
    }

    .display {
        padding: 30px 0;
    }

    .hidden {
        opacity: 0;
        transition: all 7.5s;
    }

    .show {
        opacity: 1;
        animation-name: appear;
    }

    @keyframes appear {
        from {
            scale: 0.5;
            transform: translateX(-100px);
        }

        to {
            scale: 1;
            transform: translateX(0px);
        }
    }
</style>


<main id="myDiv" style="display:none;">
    <div class="container-fluid pt-5 hidden">
        <div class="row">
            <div class="col-md-12 first-section">
                <div class="img pt-5 pb-5">
                    <img src="./images/main-pics.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <h3 class="select">Select Your Traveling Plan</h3>
    <div class="container search-trans hidden">
        <form action="" id="form">
            <div class="location">
                <h3 class="selects">Select Your <br>Traveling Plan</h3>
                <select name="" id="select1">
                    <option value="">Departure Terminal</option>
                    <option value="warri">Warri</option>
                    <option value="lagos">Lagos</option>
                    <option value="ph">Port Harcourt</option>
                    <option value="bayelsa">Bayelsa</option>
                    <option value="kano">Kano</option>
                    <option value="kaduna">Kaduna</option>
                    <option value="oweri">Oweri</option>
                    <option value="umuahia">Umuahia</option>
                    <option value="ibadan">Ibadan</option>
                </select>
                <select name="" id="select2">
                    <option value="">Arrival Terminal</option>
                    <option value="warri">Warri</option>
                    <option value="lagos">Lagos</option>
                    <option value="ph">Port Harcourt</option>
                    <option value="bayelsa">Bayelsa</option>
                    <option value="kano">Kano</option>
                    <option value="kaduna">Kaduna</option>
                    <option value="oweri">Oweri</option>
                    <option value="umuahia">Umuahia</option>
                    <option value="ibadan">Ibadan</option>
                </select>
            </div>
            <input type="date" id="date">
            <input type="submit" value="Search" id="submit">
            <div id="result"></div>
        </form>
        <div class="display">
            <form method="POST" action="<?= ROOT_URL ?>checkout.php">
                <button class="pay">Pay</button>
            </form>
        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
    </div>

    <div class="container hidden">
        <div class="row pt-5 pb-5">
            <div class="col-md-7 prices mt-5">
                <h2 class="pb-3">Get the best Prices</h2>
                <h3>Bringing you more routes with the best Vehicles.<br>We pride ourselves on providing the best transport and logistics services available all over Nigeria. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience! Through integrated huge fleet of specialized vehicles, Unox drives sustainable competitive advantages to some of Africa's largest companies.</h3>
            </div>
            <div class="col-md-5">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/fish.jpg" alt="Los Angeles" class="d-block">
                            <div class="carousel-caption">
                                <h3>Lagos Road</h3>
                                <p>Travel To Lagos At anytime of the day</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/unversity-of-ph.jpg" alt="Chicago" class="d-block">
                            <div class="carousel-caption">
                                <h3>Welcome To Port Harcourt</h3>
                                <p>Thank you, Chicago!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/warri.jpg" alt="New York" class="d-block">
                            <div class="carousel-caption">
                                <h3>Warri City</h3>
                                <p>The Big Heart Welcomes You</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/images.jpeg" alt="New York" class="d-block">
                            <div class="carousel-caption">
                                <h3>Calabar</h3>
                                <p>The City Of Calabar</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/3-Abuja-Gate.jpg" alt="New York" class="d-block">
                            <div class="carousel-caption">
                                <h3>Abuja</h3>
                                <p>The nations capital welcomes you</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
    </div>

    <div class="container-fluid pb-lg-5">
        <div class="row payment-picture">
            <div class="col-md-6 hidden">
                <div class="img1">
                    <img src="./images/box1-main.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 hidden">
                <div class="img2">
                    <img src="./images/phone.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
    </div>

    <div class="wrappers pt-4 pb-4">
        <div class="containers hidden">
            <i class="fa fa-bus"></i>
            <span class="num" data-val="1400">000</span>
            <span class="texts">Tourists</span>
        </div>

        <div class="containers">
            <i class="fas fa-smile-beam"></i>
            <span class="num" data-val="1340">000</span>
            <span class="texts">Happy Customers</span>
        </div>

        <div class="containers hidden">
            <i class="fas fa-list"></i>
            <span class="num" data-val="525">000</span>
            <span class="texts">Unox Workers</span>
        </div>

        <div class="containers">
            <i class="fas fa-star"></i>
            <span class="num" data-val="880">000</span>
            <span class="texts">Five Stars Ratings</span>
        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
    </div>

    <div class="container-fluid pt-lg-5">
        <div class="row pt-lg-5">
            <div class="col-md-6 text mt-4 hidden" style="text-align: left;">
                <h3>The lightest <br> Digital wallet you <br> will ever need</h3>
                <p>Unox digital wallet is a seamless way to pay <br> for transactions within our ecosystem.<br> Purchase bus tickets, data, and airtime our digital <br> wallet available on the mobile app store.</p>
                </center>
            </div>
            <div class="col-md-6 cards img p-0.2 hidden" style="transform: scaleX(-1); ">
                <img src="./images/54-shutterstock.jpg" alt="">
            </div>
        </div>
    </div>


    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
    </div>

    <div class="container-fluid payments-pattern p-5 hidden">
        <img src="./images/MasterCard_Logo.svg.png" alt="">
        <img src="./images/glo.png" alt="">
        <img src="./images/verve-icon-2048x709-8iunu5yi.png" alt="">
        <img src="./images/Visa-Logo-2006.png" alt="">
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top payments-patterns">
    </div>
</main>

<script>
    const select1 = document.getElementById("select1");
    const select2 = document.getElementById("select2");
    const submitBtn = document.getElementById("submit");
    const resultDiv = document.getElementById("result");
    const date = document.getElementById("date");
    const pay = document.querySelector(".pay");

    submitBtn.addEventListener("click", (e) => {
        e.preventDefault();

        const value1 = select1.value;
        const value2 = select2.value;

        let replyText = "";

        if (value1 === "lagos" && value2 === "ph") {
            replyText = "N11,000";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "lagos") {
            replyText = "N15,000";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "ph") {
            replyText = "N7,000";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "bayelsa") {
            replyText = "N7,900";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "kano") {
            replyText = "N17,500";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "Kaduna") {
            replyText = "N20,020";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "oweri") {
            replyText = "N10,200";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "umuahia") {
            replyText = "N11,100";
            pay.style.display = "block";
        } else if (value1 === "warri" && value2 === "ibadan") {
            replyText = "N12,000";
            pay.style.display = "block";
        } else if (value1 === "bayelsa" && value2 === "lagos") {
            replyText = "N15,200";
            pay.style.display = "block";
        } else if (value1 === "kano" && value2 === "lagos") {
            replyText = "N26,300";
            pay.style.display = "block";
        } else if (value1 === "oweri" && value2 === "lagos") {
            replyText = "N10,000";
            pay.style.display = "block";
        } else if (value1 === "lagos" && value2 === "bayelsa") {
            replyText = "N16,900";
            pay.style.display = "block";
        } else if (value1 === "bayelsa" && value2 === "ph") {
            replyText = "N5,000";
            pay.style.display = "block";
        } else if (value1 === "umuahia" && value2 === "lagos") {
            replyText = "N15,000";
            pay.style.display = "block";
        } else if (value1 === "lagos" && value2 === "umuahia") {
            replyText = "N16,700";
            pay.style.display = "block";
        } else if (value1 === "oweri" && value2 === "umuahia") {
            replyText = "N5,000";
            pay.style.display = "block";
        } else if (value1 === "umuahia" && value2 === "oweri") {
            replyText = "N5,400";
            pay.style.display = "block";
        } else if (value1 === "ibadan" && value2 === "lagos") {
            replyText = "N7,000";
            pay.style.display = "block";
        } else if (value1 === "lagos" && value2 === "ibadan") {
            replyText = "N8,400";
            pay.style.display = "block";
        } else if (value1 === "ibadan" && value2 === "kano") {
            replyText = "N25,200";
            pay.style.display = "block";
        } else if (value1 === "kano" && value2 === "warri") {
            replyText = "N18,220";
            pay.style.display = "block";
        } else if (value1 === "kano" && value2 === "kaduna") {
            replyText = "N17,800";
            pay.style.display = "block";
        } else if (value1 === "kaduna" && value2 === "kano") {
            replyText = "N20,200";
            pay.style.display = "block";
        } else if (value1 === "ph" && value2 === "lagos") {
            replyText = "N19,340";
            pay.style.display = "block";
        } else if (value1 === "ph" && value2 === "warri") {
            replyText = "N5,450";
            pay.style.display = "block";
        } else if (value1 === "ph" && value2 === "kano") {
            replyText = "N15,140";
            pay.style.display = "block";
        } else if (value1 === "oweri" && value2 === "ph") {
            replyText = "N12,340";
            pay.style.display = "block";
        } else if (value1 === "oweri" && value2 === "warri") {
            replyText = "N11,140";
            pay.style.display = "block";
        } else {
            replyText = "Not Going to Any of the Terminal at the moment";
        }
        resultDiv.textContent = replyText;
    });
</script>


<?php
include "./footer.php";
?>