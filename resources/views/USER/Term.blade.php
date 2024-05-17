<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- title -->
    <title>Better Life |Term $ Condition</title>
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
        gap: 2rem;
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

    .bottom-footer {
        background-color: #0052B8;
        padding: 20px 0 10px 0;
    }

    .container-1 {
        width: 100%;
        height: 100%;
        min-height: 100vh;
        font-family: 'Quicksand', sans-serif;
        margin: 0;
    }

    .content {
        flex-direction: column;
        padding: 25px;
    }

    .content h1,
    h2,
    h3 {
        margin-bottom: 20px;
        color: #595959;
        font-size: 25px;
    }

    .content label {
        color: #7d7d7d;
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

        .footerlink {
            padding-top: 20px !important;
        }

        .bottom-footer p {
            font-size: 14px;
        }

        .container-1 {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
        }

        .content {
            flex-direction: column;
            background: white;
            padding: 20px;
        }

        .content h1,
        h2,
        h3 {
            margin-bottom: 10px;
            color: #595959;
            font-size: 22px;
        }

        .content label {
            color: #7d7d7d;
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

    a {
        text-decoration: none !important;
        color: #ffffff;
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
                <a href="{{ url('/user/Term') }}">
                    <li>Term & Condition</li>
                </a>
                <a href="{{ url('/user/Privay') }}">
                    <li>Privacy Policy</li>
                </a>
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
    </div>

    <div class="container-1">
        <div class="content">
            <h1>Terms & Conditions</h1>
            <p>
                By downloading or using the app, these terms will automatically apply to you – you should make sure therefore that you read them carefully before using the app. You’re not allowed to copy or modify the app, any part of the app, or our trademarks in any way. You’re not allowed to attempt to extract the source code of the app, and you also shouldn’t try to translate the app into other languages or make derivative versions. The app itself, and all the trademarks, copyright, database rights, and other intellectual property rights related to it, still belong to Betterlife Digital Services Limited.
            </p>
    
            <p>
                Betterlife Digital Services Limited is committed to ensuring that the app is as useful and efficient as possible. For that reason, we reserve the right to make changes to the app or to charge for its services, at any time and for any reason. We will never charge you for the app or its services without making it very clear to you exactly what you’re paying for.
            </p>
    
            <p>
                The Betterlife app stores and processes personal data that you have provided to us, to provide our Service. It’s your responsibility to keep your phone and access to the app secure. We therefore recommend that you do not jailbreak or root your phone, which is the process of removing software restrictions and limitations imposed by the official operating system of your device. It could make your phone vulnerable to malware/viruses/malicious programs, compromise your phone’s security features and it could mean that the Betterlife app won’t work properly or at all.
            </p>
    
            <p>
                The app does use third-party services that declare their Terms and Conditions.
            </p>
            <p>
                Link to Terms and Conditions of third-party service providers used by the app:
                <ul>
                    <li>Google Play Services</li>
                </ul>
            </p>
    
            <p>
                You should be aware that there are certain things that Betterlife Digital Services Limited will not take responsibility for. Certain functions of the app will require the app to have an active internet connection. The connection can be Wi-Fi or provided by your mobile network provider, but Betterlife Digital Services Limited cannot take responsibility for the app not working at full functionality if you don’t have access to Wi-Fi, and you don’t have any of your data allowance left.
            </p>
    
            <p>
                If you’re using the app outside of an area with Wi-Fi, you should remember that the terms of the agreement with your mobile network provider will still apply. As a result, you may be charged by your mobile provider for the cost of data for the duration of the connection while accessing the app, or other third-party charges. In using the app, you’re accepting responsibility for any such charges, including roaming data charges if you use the app outside of your home territory (i.e. region or country) without turning off data roaming. If you are not the bill payer for the device on which you’re using the app, please be aware that we assume that you have received permission from the bill payer for using the app.
            </p>
    
            <p>
                Along the same lines, Betterlife Digital Services Limited cannot always take responsibility for the way you use the app i.e. You need to make sure that your device stays charged – if it runs out of battery and you can’t turn it on to avail the Service, Betterlife Digital Services Limited cannot accept responsibility.
            </p>
    
            <p>
                With respect to Betterlife Digital Services Limited’s responsibility for your use of the app, when you’re using the app, it’s important to bear in mind that although we endeavor to ensure that it is updated and correct at all times, we do rely on third parties to provide information to us so that we can make it available to you. Betterlife Digital Services Limited accepts no liability for any loss, direct or indirect, you experience as a result of relying wholly on this functionality of the app.
            </p>
    
            <p>
                At some point, we may wish to update the app. The app is currently available on Android & iOS – the requirements for both systems (and for any additional systems we decide to extend the availability of the app to) may change, and you’ll need to download the updates if you want to keep using the app. Betterlife Digital Services Limited does not promise that it will always update the app so that it is relevant to you and/or works with the Android & iOS version that you have installed on your device. However, you promise to always accept updates to the application when offered to you. We may also wish to stop providing the app, and may terminate use of it at any time without giving notice of termination to you. Unless we tell you otherwise, upon any termination, (a) the rights and licenses granted to you in these terms will end; (b) you must stop using the app, and (if needed) delete it from your device.
            </p>
    
            <h2>Changes to This Terms and Conditions</h2>
            <p>
                We may update our Terms and Conditions from time to time. Thus, you are advised to review this page periodically for any changes. We will notify you of any changes by posting the new Terms and Conditions on this page. These terms and conditions are effective as of 2022-09-29.
            </p>
    
            <p>
                These terms and conditions are effective as of 2022-08-14.
            </p>
    
            <h2>Contact Us</h2>
            <p>
                If you have any questions or suggestions about our Terms and Conditions, do not hesitate to contact us at info@betterlifeglobal.com.ng or +234 703 456 3210.
            </p>
        </div>
    </div>
    

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
                                <a href="{{ url('/user/Privay') }}">
                                    <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">
                                        Privacy Policy
                                    </li>
                                </a>

                                <a href="{{ url('/user/Term') }}">
                                    <li class="my-3 text-subtitle-2" style="font-size: 14px; font-weight:500;">Term $
                                        Condition</li>
                                </a>
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
