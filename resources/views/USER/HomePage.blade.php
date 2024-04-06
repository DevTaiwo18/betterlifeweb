<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- title -->
    <title>Better Life |Tranfer Transaction</title>
    <!-- title -->

    <!-- css -->
    <!-- css -->

    <!-- logo -->
    <link rel="shortcut icon" href="./image/logo.png" type="image/x-icon">
    <!-- logo -->

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- boostrap -->

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <!-- font -->

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!-- font -->

    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- icon -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome -->

</head>

<style>
    * {
        padding: 0%;
        margin: 0%;
        box-sizing: border-box;
    }

    body {
        font-family: "Open Sans", sans-serif;
    }

    .backgroundColor {
        background-color: rgb(84, 154, 224);
        background-image: linear-gradient(to bottom left, rgb(131, 110, 246), rgb(120, 154, 234), rgb(134, 128, 244), rgb(78, 149, 222));
    }

    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 5px 20px;
        border-bottom: 1px solid #ffffff;
    }

    header ul {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 15px;
        list-style-type: none;
        gap: 4rem;
    }

    header ul li {
        font-size: 15px;
        font-weight: 500;
        color: #ffffff;
        line-height: 28px;
        text-decoration: none;
        font-family: "Open Sans", sans-serif;
        font-style: normal;
    }

    .userimg {
        padding: 0;
        margin: 0;
    }

    .subtn {
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 600;
        background-color: #BAD8FD;
        box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
        border: none;
        border-radius: 5px;
        color: rgb(0, 16, 37);
        transition: background-color 0.3s ease;
    }

    .subtn:hover {
        background-color: rgb(208, 227, 251);
    }


    .siubtn {
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        color: #ffffff;
        background-image: linear-gradient(90deg, #0052B8 0%, rgba(255, 0, 122, 0.44) 100%);
        box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
    }

    .btnns {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .landing {
        background-image: url("../assets/img/landing_bg.png");
        background-position: center;
        object-fit: contain;
        width: 90%;
        margin: auto;
        padding: 15px;
    }

    .overlay {
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: inset 10px 10px 15px rgba(255, 255, 255, 0.3), inset -10px -10px 15px rgba(0, 0, 0, 0.05);
        filter: drop-shadow(0px 40px 80px rgba(82, 82, 82, 0.15));
        border-radius: 20px;
        padding-top: 60px;
        padding-bottom: 50px;
        padding-left: 80px;
        margin: 40px 0;
    }

    .roww {
        display: flex;
    }

    .coll {
        width: 50%;
    }

    .welcome {
        font-size: 26px;
        font-weight: 400;
        letter-spacing: 4px;
    }

    .weprovide {
        letter-spacing: 2px;
        word-spacing: 4px;
        font-weight: 500;
        font-size: 36px;
        padding: 20px 0;
    }

    .weprovided {
        font-size: 17px;
        padding: 0 0 20px 0;
    }

    .signin {
        color: #001025 !important;
        padding: 8px 20px;
        font-size: 14px;
        background-color: #BAD8FD;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
    }

    .signup {
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        background-image: linear-gradient(90deg, #0052B8 0%, rgba(255, 0, 122, 0.44) 100%);
        box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
    }

    .happy-girl-container {
        position: absolute;
        top: 0;
        right: -60px;
        width: 40%;
        height: 120%;
        background-image: url("/image/img/landing_girl.png");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right top -30px;
    }

    .a {
        text-decoration: none;
    }

    .service-con {
        width: 85%;
        margin: auto;
    }

    .services {
        background-image: url("/image/img/service/service-Iphone.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        display: flex;
        justify-content: space-between;
    }

    .service-card {
        width: 32%;
        text-align: center;
    }

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
        padding: 20px;
        margin-bottom: 20px;
        border: none;
    }

    .card img {
        width: 5rem;
        margin-bottom: 1rem;
    }


    .alone {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-us {
        background-image: linear-gradient(90deg, #0052B8 3.11%, rgba(184, 0, 144, 0.5), rgba(184, 0, 144, 0.1));
    }

    .about-lay {
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: inset 10px 10px 15px rgba(255, 255, 255, 0.3), inset -10px -10px 15px rgba(0, 0, 0, 0.05);
        filter: drop-shadow(0px 40px 80px rgba(82, 82, 82, 0.15));
        border-radius: 50px 12px;
        padding: 40px 40px 50px 40px;
        box-sizing: content-box;
    }

    .about-lay p {
        font-size: 19px;
        font-weight: 400;
    }

    .about-img {
        width: 100%;
    }

    .h5 {
        font-size: 25px;
        font-weight: 600;
    }

    .accordion-collapse {
        transition: height 0.3s ease;
    }

    .accordion-button:not(.collapsed) {
        color: #000;
        background-color: transparent;
    }

    .accordion-body {
        background-color: #f8f9fa;
        color: #343a40;
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 15px;

    }

    .accordion-button {
        font-family: "Quicksand", sans-serif;
        font-size: 15px;
        line-height: 15px;
        color: rgba(0, 0, 0, 0.87);
        font-weight: 600;
        font-size: 15px;
    }

    .contact-us {
        background-color: #EAF3FF;
    }

    .contact-us .contactImg div img {
        width: 95%;
    }

    footer {
        background-color: #0052B8;
    }

    .footerLogo {
        width: 220px;
    }

    .footer-num {
        color: #FFE600;
    }

    .footerdiv {
        padding-left: 90px !important;
        padding-right: 90px !important;
        border-bottom: 1px solid #fff;
    }

    .bottom-footer{
        background-color: #0052B8;
        padding: 20px 0 10px 0;
    }

    /* media query */

    @media(max-width: 1042px) {
        header ul {
            gap: 3rem;
        }

        .footerdiv {
            padding-left: 50px !important;
            padding-right: 50px !important;
        }
    }

    @media (max-width: 1000px) {
        header ul {
            display: none;
        }

        header {
            padding: 10px 10px;
        }

        .service-card {
            width: 90%;
        }

        .services {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .service-con {
            width: 100%;
            margin: auto;
        }

        .footerdiv {
            padding-left: 50px !important;
            padding-right: 50px !important;
        }
    }

    @media (max-width:790px) {
        .overlay {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            margin: 10px 0;
        }

        .welcome {
            font-size: 26px;
            font-weight: 400;
            letter-spacing: 4px;
        }

        .weprovide {
            word-spacing: 2px;
            font-weight: 500;
            font-size: 30px;
            padding: 20px 0;
        }

        .weprovided {
            font-size: 17px;
            padding: 0 0 20px 0;
        }

        .roww {
            display: block;
        }

        .coll {
            width: 95%;
        }

        .happy-girl-container {
            display: none;
        }

        .h5 {
            font-size: 20px;
            font-weight: 600;
        }

    }

    @media (max-width: 500px) {
        .btnns {
            gap: 0.5rem;
        }

        .subtn {
            padding: 8px 15px;
            font-size: 12px;
        }

        .siubtn {
            padding: 8px 15px;
            font-size: 12px;
        }

        .userimg {
            width: 8rem;
        }

        .landing {
            width: 100%;
        }

        .welcome {
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 4px;
        }

        .weprovide {
            letter-spacing: 2px;
            word-spacing: 4px;
            font-weight: 500;
            font-size: 20px;
            padding: 20px 0;
        }

        .weprovided {
            font-size: 14px;
            padding: 0 0 20px 0;
        }

        .footerdiv {
            padding-left: 50px !important;
            padding-right: 50px !important;
        }

        .footerdiv {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .footerlink{
            padding-top: 20px !important;
        }

        .bottom-footer p{
            font-size: 14px;
        }

    }

    @media (max-width: 320px) {

        .subtn {
            padding: 8px 12px;
            font-size: 10px;
        }

        .siubtn {
            padding: 8px 12px;
            font-size: 10px;
        }

        .userimg {
            width: 7rem;
        }

    }
</style>

<body>
    <div class="backgroundColor">
        <header>
            <a href="{{ url('/user') }}">
                <img class="userimg" src="/image/download.png" alt="">
            </a>

            <ul>
                <li>Home</li>
                <li>Service</li>
                <li>About</li>
                <li>Faqs</li>
                <li>Contact</li>
                <li>Api</li>
            </ul>

            <div class="btnns">

                <a href="{{ url('/user/Signin') }}">
                    <button class="subtn shadow-lg">SIGN IN</button>
                </a>

                <a href="{{ url('/user/Signup') }}">
                    <button class="siubtn">SIGN UP</button>
                </a>

            </div>
        </header>
        <div class="landing">
            <main>
                <div class="overlay pl-4 pl-sm-16">
                    <div class="roww text-white">
                        <div class="coll">
                            <p class="welcome">Welcome to BetterLife</p>
                            <h1 class="weprovide">We provide reliable and quality</h1>
                            <p class="weprovided">We provide fast and convenient services for recharging
                                airtime, purchasing data bundles, subscribing to cable TV
                                (DSTV, GOTV, and STARTIMES), paying electricity bills,
                                and converting airtime to cash.</p>
                            <div class="btnns">
                                <a class="a" href="{{ url('/user/Signin') }}">
                                    <v-btn class="subtn mr-8">SIGN IN</v-btn>
                                </a>

                                <a class="a" href="{{ url('/user/Signup') }}">
                                    <v-btn class="siubtn">SIGN UP</v-btn>
                                </a>
                            </div>
                        </div>

                        <div class="coll happy-girl-container">
                            <div class="happy-girl"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <section class="service-con">
        <div>
            <div class="text-center py-5 fs-4">
                <h1 class="text-h4">Services</h1>
            </div>
            <div class="services">
                <div class="service-card">
                    <card class="text-center theCard card">
                        <img src="/image/img/service/service1.png" alt="">
                        <h3 class="my-2">Airtime and Data</h3>
                        <p>Stay Connected and Productive with
                            Affordable Airtime and Data Plans. Browse,
                            stream and work seamlessly with our
                            high-quality data. Get the data you need
                            today and stay connected to what matters most.</p>
                    </card>
                    <card class="text-center  theCard card">
                        <img src="/image/img/service/service2.png" alt="">
                        <h3 class="my-2">Airtime to Cash</h3>
                        <p>Stay Connected and Productive with
                            Affordable Airtime and Data Plans. Browse,
                            stream and work seamlessly with our
                            high-quality data. Get the data you need
                            today and stay connected to what matters most.</p>
                    </card>
                </div>
                <div class="service-card">
                    <card class="text-center  theCard card">
                        <img src="/image/img/service/service3.png" alt="">
                        <h3 class="my-2">Transfer</h3>
                        <p>Stay Connected and Productive with
                            Affordable Airtime and Data Plans. Browse,
                            stream and work seamlessly with our
                            high-quality data. Get the data you need
                            today and stay connected to what matters most.</p>
                    </card>
                    <card class="text-center  theCard card">
                        <img src="/image/img/service/service4.png" alt="">
                        <h3 class="my-2">Bill Payment</h3>
                        <p>Stay Connected and Productive with
                            Affordable Airtime and Data Plans. Browse,
                            stream and work seamlessly with our
                            high-quality data. Get the data you need
                            today and stay connected to what matters most.</p>
                    </card>
                </div>
            </div>
            <div class="alone">
                <div class="service-card">
                    <card class="text-center  theCard card">
                        <img src="/image/img/service/service5.png" alt="">
                        <h3 class="my-2">Loan</h3>
                        <p>Stay Connected and Productive with
                            Affordable Airtime and Data Plans. Browse,
                            stream and work seamlessly with our
                            high-quality data. Get the data you need
                            today and stay connected to what matters most.</p>
                    </card>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us"
        style="background-image: linear-gradient(90deg, #0052B8 3.11%, rgba(184, 0, 144, 0.5), rgba(184, 0, 144, 0.1));">
        <div class="container p-0">
            <div class="text-center text-white p-4">
                <h1 class="text-h4 fs-2">About Us</h1>
            </div>
            <div class="row justify-content-between py-5 pt-0 py-sm-10">
                <div class="col-12 col-md-6">
                    <div class="about-lay">
                        <p class="text-white">Experience Faster and More Convenient Telecommunications Services with Us.
                            We offer a range of transmission services, including data transmission, cable subscription,
                            bill payments, airtime top-ups, and more. Our services are designed for optimal convenience
                            and customer satisfaction. Plus, we offer zero capital business solutions to help
                            entrepreneurs and students start their own telecommunications business. Join us today and
                            enjoy the benefits of modern telecommunications!</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-none d-sm-block">
                    <img class="about-img" src='/image/img/about-us-image.png' alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pb-5">
            <div class="text-center py-5">
                <h1 class="h5">Frequently asked questions</h1>
            </div>
            <div class="px-2 px-sm-16">
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne" data-bs-parent="#accordionFlushExample">
                                How to buy data?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                aliquam tincidunt arcu, nec viverra odio ullamcorper in. Donec id justo enim.
                                Pellentesque ultrices ligula sed odio ultrices, et consectetur nulla volutpat. Sed vel
                                felis pretium, consequat quam in, bibendum nulla.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo" data-bs-parent="#accordionFlushExample">
                                What are the codes for checking data balance?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                aliquam tincidunt arcu, nec viverra odio ullamcorper in. Donec id justo enim.
                                Pellentesque ultrices ligula sed odio ultrices, et consectetur nulla volutpat. Sed vel
                                felis pretium, consequat quam in, bibendum nulla.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree" data-bs-parent="#accordionFlushExample">
                                How do i fund my wallet?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                aliquam tincidunt arcu, nec viverra odio ullamcorper in. Donec id justo enim.
                                Pellentesque ultrices ligula sed odio ultrices, et consectetur nulla volutpat. Sed vel
                                felis pretium, consequat quam in, bibendum nulla.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour" data-bs-parent="#accordionFlushExample">
                                How to use our service?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                aliquam tincidunt arcu, nec viverra odio ullamcorper in. Donec id justo enim.
                                Pellentesque ultrices ligula sed odio ultrices, et consectetur nulla volutpat. Sed vel
                                felis pretium, consequat quam in, bibendum nulla.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us">
        <div class="container pb-5">
            <div class="text-center py-5">
                <h1 class="h5">Contact Us</h1>
            </div>
            <div class="row align-items-center justify-content-center contactImg">
                <div class="col-12 col-md-6 text-center">
                    <img src="/image/img/contact-left.png" alt="">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img src="/image/img/contact-right.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white py-8">
        <div class="container-fluid p-5 footerdiv">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-4">
                        <img class="footerLogo" src="/image/img/logo.png" alt="Logo">
                    </div>
                    <div class="mb-4">
                        <p class="py-3 text-subtitle-1" style="font-size: 16px; font-weight:500;">We offer instant
                            recharge of airtime, databundle, cable TV <br>
                            subscriptions (DSTV, GOTV, & STARTTIMES) and Electricity bill payments.</p>
                        <p class="py-3 text-subtitle-1 footer-num">+234 7034 563 210 (Whatsapp Only)</p>
                        <p class="py-3 text-subtitle-1" style="font-size: 16px; font-weight:500;">
                            Support@betterlife.com</p>
                    </div>
                    <div>
                        <img src="/image/img/googlePlay.png" alt="Google Play">
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="row footerlink">
                        <div class="col-6">
                            <p style="font-size: 16px; font-weight:500;">Quick Links</p>
                            <ul>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Home</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">About us
                                </li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Contact us
                                </li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Faqs</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Login</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Register
                                </li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Blog</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <p style="font-size: 16px; font-weight:500;">Quick Links</p>
                            <ul>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Data
                                    Purchase</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Airtime
                                    Purchase</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Electricity
                                    Purchase</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Cable
                                    Purchase</li>
                                <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Bulk SMS
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center bottom-footer">
            <p>Betterlife.com © 2022 | All rights reserved.</p>
        </div>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
