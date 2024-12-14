<?php
include './nav.php';
?>

<style>
    @media only screen and (min-width: 1040px) {

        .imgs {
            height: 400px !important;
        }

        .cover h3 {
            font-size: 2.5rem;
            font-weight: 600;
        }

        .cover p {
            font-weight: 400;
        }
    }

    .cover {
        height: 70vh;
        margin-top: 150px;
        /* background-color: lightgray; */
    }

    .tabcontent {
        background-color: lightgray;
    }

    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 30%;
        height: 530px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: grey;
        color: white;
        font-weight: 600;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: lightgray;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        border: 1px solid #ccc;
        width: 70%;
        border-left: none;
        height: 530px;
    }

    img {
        width: 100%;
        height: 100%;
        padding: 20px;
    }

    .pics {
        border: 10px solid white;
    }
</style>

<div class="cover ">
    <h2 style="text-align:center; font-size: 2.7rem; padding: 10px 0; font-weight: 500; text-transform:capitalize;">Our Services</h2>


    <div class="tab pt-5 pb-5">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Executive Express</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Sprinter Services</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">ABC Coach West Africa</button>
        <button class="tablinks" onclick="openCity(event, 'New-York')">Shuttle Services</button>
    </div>

    <div id="London" class="tabcontent">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-6 imgs">
                    <img src="./images/bus.png" class="pics" alt="">
                </div>
                <div class="col-md-6">
                    <h3>Unox Executive Express</h3>
                    <p>This class of service offers a fully air-conditioned, almost non-stop bus service, toilet facility, very comfortable and reclinable seats, on-board lunch and other perks.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="Paris" class="tabcontent">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-6 imgs">
                    <img src="./images/bus4-01.png" class="pics" alt="">
                </div>
                <div class="col-md-6">
                    <h3>Sprinter Services</h3>
                    <p>This service is specially designed for light travellers with little or no luggage. It carries 14 passengers only, fully air-conditioned and offers ample leg room. It is available from all ABC Transport terminals</p>
                </div>
            </div>
        </div>
    </div>

    <div id="Tokyo" class="tabcontent">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-6 imgs">
                    <img src="./images/bus2-01.png" class="pics" alt="">
                </div>
                <div class="col-md-6">
                    <h3>ABC Coach West Africa</h3>
                    <p>West African countries are now closer than you can ever imagine. This is because ABC Transport has made it so with our new state-of-the-art fleets. ABC Coach West Africa features, in all its entirety, the most modern coach service available in West Africa sub-region. This dignified service is very suitable for business, travel and tourism.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="New-York" class="tabcontent">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-6 imgs">
                    <img src="./images/bus3.png" class="pics" alt="">
                </div>
                <div class="col-md-6">
                    <h3>Shuttle Services</h3>
                    <p>ABC Transport Plc Shuttle Service is available in the following routes: Aba, Awka, Calabar, Enugu, Onitsha, Owerri, Port Harcourt, Umuahia, Uyo And Warri.So travel in air-conditioned buses that have speed control and tracking mechanism, cosy interiors and fitted with stereo entertainment.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>


<?php
include './footer.php';
?>