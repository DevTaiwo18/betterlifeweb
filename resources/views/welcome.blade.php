<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <style>
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(239, 240, 245);
        }

        /* header style */

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 10px 15px 10px;
            background-color: #ffffff;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2000;
        }

        header img {
            width: 9rem;
            color: white;
        }

        header a {
            text-decoration: none;
        }

        header .header-div {
            display: flex;
            align-items: center !important;
            justify-content: center;
            gap: 8px;
        }

        header .header-div #circle {
            border: 1px solid blue;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            display: inline-block;
        }

        header .header-div h2 {
            font-size: 13px;
            font-weight: 800;
            font-style: normal;
            padding-top: 7px;
            line-height: 19px;
            color: blue;
            font-family: "Open Sans", sans-serif;
            z-index: 2000;
        }

        .menu {
            font-size: 20px;
            color: #000000;
            font-weight: 800;
            font-family: "Open Sans", sans-serif;
            display: none !important;
        }

        /* nav */
        nav {
            height: 100%;
            width: 18%;
            background-color: #ffffff;
            overflow-y: scroll;
            position: fixed;
            padding-top: 1rem;
            bottom: 0;
            z-index: 100;
        }

        .flex {
            display: flex !important;
            position: relative;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: block;
            text-align: center;
            margin-top: 60px;
        }

        nav ul a {
            text-decoration: none;
        }

        nav ul a li {
            padding: 8px;
            border-radius: 20px;
            margin-top: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul a li .arrow-right {
            font-size: 10px;
            color: #000000 !important;
        }

        nav ul a li:hover {
            background-color: #91929284;
            cursor: pointer;
        }

        nav ul a li.active {
            background-color: #91929284;
        }

        nav ul li .b {
            display: flex;
            align-items: center;
            justify-content: start;
            gap: 8px;
            text-decoration: none;
        }

        nav ul li .b span {
            font-size: 12px;
            color: #000000;
        }

        .custom-radius {
            border-radius: 10px;
            height: 23px;
            width: 23px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: rgb(10, 26, 168);
            font-size: 12px;
            font-weight: 700;
            font-family: "Quicksand", sans-serif;
        }

        .con {
            width: 80%;
            right: 13px;
            border-radius: 10px;
            padding: 30px 20px;
            position: absolute;
            margin-top: 100px;
        }


        /* flex-div */

        .flex-div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .flex-1 {
            border-radius: 10px;
            padding: 10px;
            background-color: rgb(10, 26, 168);
            width: 23%;
        }

        .text img {
            font-size: 13px;
        }

        .text p {
            display: inline-block;
            font-size: 12px;
            font-weight: 500;
            color: #ffffff;
            line-height: 17px;
            margin-left: 4px;
            font-family: "Quicksand", sans-serif;
        }

        .flex-1 .flex-p {
            font-size: 12px;
            font-weight: 500;
            color: #ffffff;
            font-family: "Quicksand", sans-serif;
            line-height: 17px;
            padding-left: 27px;
        }

        .hi {
            font-size: 12px;
            font-weight: 700;
            color: #222222;
            font-family: "Quicksand", sans-serif;
            line-height: 17px;
            padding: 30px 5px 0 10px;
        }

        .search {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 50px;
            margin-right: 20px;
        }

        .flex-2 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .flex-2 label {
            color: rgb(175, 176, 181);
        }

        .btns {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
        }

        .btns button {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
        }

        .acc-table {
            margin-top: 30px;
        }

        .acc-table tr th {
            text-align: center;
            font-size: 12px;
            font-weight: 800;
            color: #000000;
            line-height: 17px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .acc-table tr td {
            text-align: center;
            font-size: 12px;
            font-weight: 800;
            Color: #464855;
            line-height: 19px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .transaction {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 0 15px;
        }

        .transaction h1 {
            text-align: center;
            font-size: 19px;
            font-weight: 800;
            color: #000000;
            line-height: 28px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .transaction .drop {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: 1px solid rgb(10, 26, 168);
        }

        .transaction ul li a {
            font-size: 13px;
            font-weight: 500;
            color: #222222
        }

        .flexx {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            gap: 25rem;
        }

        .flexx button {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: 1px solid rgb(10, 26, 168);
        }

        .flexxx {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 20px 0 20px;
        }

        .flex-box {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .blue {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: 1px solid rgb(10, 26, 168);
        }

        .blue h3 {
            font-size: 12px;
            font-weight: 800;
            color: #ffffff;
            line-height: 28px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .date {
            display: flex;
            flex-direction: row;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .form-group label {
            font-size: 16px;
            color: #333;
        }

        .form-group input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            background-color: transparent
        }

        .tab {
            padding-top: 30px;
        }

        #planForm {
            width: 100%;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 15px;
        }

        #planform h2 {
            font-size: 19px;
            font-weight: 800;
            color: #000000;
            line-height: 28px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
            padding-bottom: 20px
        }

        #planform .save {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 24px;
            font-size: 16px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: 1px solid rgb(10, 26, 168);
        }

        #contentContainer {
            margin-top: 30px;
        }

        #contentContainer tr th {
            text-align: center;
            font-size: 12px;
            font-weight: 800;
            color: #000000;
            line-height: 17px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .blu {
            background-color: rgb(10, 26, 168);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 10px;
            font-weight: 500;
            font-family: "Quicksand", sans-serif;
            border: 1px solid rgb(10, 26, 168);
        }

        #contentContainer tr td {
            text-align: center;
            font-size: 12px;
            font-weight: 800;
            Color: #464855;
            line-height: 19px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .addPlan {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
        }

        #myModal {
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.434);
            padding-top: 60px;
        }

        #myCustomModal {
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.434);
            padding-top: 110px;
        }

        #myEditModal {
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.434);
            padding-top: 60px;
        }

        #myEditCustomModal {
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.434);
            padding-top: 110px;
        }

        .modal-content {
            margin: 0% auto;
            width: 60%;
        }

        .Emodal-content {
            margin: 0% auto;
            width: 60%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .table {
            margin-top: 30px;
        }

        .table tr td {
            text-align: center;
            font-size: 12px;
            font-weight: 800;
            Color: #464855;
            line-height: 19px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }

        .table tr th {
            text-align: center;
            font-size: 12px;
            font-weight: 800;
            Color: #000000;
            line-height: 19px;
            font-style: normal;
            font-family: "Quicksand", sans-serif;
        }



        @media(max-width:1024px) {
            #planForm {
                width: 80%;
            }

            #myModal {
                display: none;
                padding-top: 30px;
            }

            #myEditModal {
                display: none;
                padding-top: 30px;
            }

            .modal-content {
                margin: auto;
                width: 70%;
            }

            .Emodal-content {
                margin: auto;
                width: 70%;
            }

        }

        @media (max-width:1000px) {

            .flex-div {
                gap: 10px;
            }

            .flex-1 {
                border-radius: 10px;
                padding: 10px;
                background-color: rgb(10, 26, 168);
                width: 25%;
            }

            .acc-table tr th {
                font-size: 10px;
            }

            .acc-table tr td {
                font-size: 10px;
            }

            .flexxx {
                display: block;
                justify-content: space-between;
                align-items: flex-start;
                padding: 30px 10px 0 10px;
            }

            .flex-box {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                gap: 20px;
                margin-bottom: 10px
            }

            .blue {
                width: 100%;
            }

            .date {
                width: 100%;
            }

            #contentContainer tr th {
                text-align: center;
                font-size: 8px;
            }

            #contentContainer tr td {
                text-align: center;
                font-size: 8px;
            }

            #contentContainer tr td .btn {
                text-align: center;
                font-size: 8px;
            }

            .modal-content {
                margin: auto;
                width: 60%;
            }

            .Emodal-content {
                margin: auto;
                width: 60%;
            }

            #myModal {
                display: none;
                padding-top: 30px;
            }

            #myEditModal {
                display: none;
                padding-top: 30px;
            }

        }

        @media (max-width:768px) {
            .con {
                margin-top: 120px;
                padding: 20px 10px;
            }

            .flex-div {
                gap: 10px;
            }

            .flex-1 {
                border-radius: 10px;
                padding: 2px 10px;
                background-color: rgb(10, 26, 168);
                width: 30%;
            }

            .blu {
                font-size: 10px;
            }

            .modal-content {
                margin: auto;
                width: 90%;
            }

            .Emodal-content {
                margin: auto;
                width: 90%;
            }

            #myModal {
                display: none;
                padding-top: 30px;
            }

            #myEditModal {
                display: none;
                padding-top: 30px;
            }

            .table {
                width: 100%;
                overflow-x: scroll !important;
            }


            header .header-div h2 {
                display: none;
            }

            .menu {
                display: block !important;
            }

            nav {
                display: none;
                width: 0;
                overflow: hidden;
                opacity: 0;
                z-index: 1000;
            }

            @keyframes slideIn {
                0% {
                    width: 0;
                    opacity: 0;
                }

                100% {
                    width: 50%;
                    opacity: 1;
                }
            }

            nav.show {
                display: block;
                animation: slideIn 0.5s ease forwards;
            }

            .con {
                width: 100% !important;
                right: 0;
                border-radius: 0%;
                margin-top: 70px;
                padding: 10px;
            }
        }

        @media (max-width: 767px) {
            .con {
                width: 100% !important;
                right: 0;
                border-radius: 0%;
                margin-top: 2px !important;
                padding: 10px;
            }

            .flex {
                display: flex !important;
                ;
                margin-top: 90px;
                position: relative;
            }

            .flex-div {
                display: block;
            }

            .flex-1 {
                border-radius: 10px;
                padding: 3px 10px;
                background-color: rgb(10, 26, 168);
                width: 100%;
                margin-bottom: 10px;
            }

            .tab {
                margin-top: 30px;
                width: 100%;
                overflow-x: auto !important;
            }

            .form-group input[type="date"] {
                font-size: 12px;
            }

            .transaction h1 {
                font-size: 12px;
                padding-top: 10px;
            }

            .transaction .drop {
                padding: 10px 10px;
            }

            .acc-table tr {
                padding: 0;
            }

            .acc-table tr th {
                font-size: 8px;
                word-spacing: 2px;
            }

            .acc-table tr td {
                font-size: 8px;
                word-spacing: 2px;
                letter-spacing: 0
            }

            #planForm {
                width: 95%;
            }

            .tab {
                padding-top: 5px;
            }

            #planform h2 {
                font-size: 15px;
                padding-bottom: 0px
            }

            #contentContainer {
                width: 100%;
                overflow-x: auto !important;
            }

            #contentContainer tr th {
                text-align: center;
                font-size: 8px;
            }

            #contentContainer tr td {
                text-align: center;
                font-size: 8px;
            }

            .dropdown #dropdownMenuButton1 {
                padding: 10px;
                font-size: 10px
            }

            .table tr td {
                font-size: 10px;
            }

            .table tr th {
                font-size: 10px;
            }

            .Husmo {
                font-size: 8px;
            }
        }

        @media (max-width: 400px) {
            nav ul li .b span {
                font-size: 10px !important;
                color: rgb(175, 176, 181);
            }
        }
    </style>

</head>

<body>
    <!-- static Header -->
    <header class="bg-white shadow-lg">
        <a href="{{ url('/') }}">
            <img src="./image/download.png" alt="">
        </a>
        <div class="header-div">
            <div id="circle"></div>
            <h2>Hello admin</h2>
            <i class="bi bi-list menu" onclick="toggleMenu()"></i>
        </div>
    </header>
    <!-- static Header -->

    <div class="flex">
        <nav class="shadow-lg" id="mainNav">
            <ul>
                <a href="{{ url('/') }}">
                    <li>
                        <div class="b">
                            <div class="custom-radius">
                                <i class="bi bi-house-door-fill "></i>
                            </div>
                            <span>Home</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>
                <a href="{{ url('tx') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi bi-list"></i>
                            </div>
                            <span>Transaction</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('tv') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi bi-list"></i>
                            </div>
                            <span>Tv settings</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('Hanmodata') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Data Plans</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('Admin') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Admin Settings</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('ApiSetting') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Api Settings</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('Reverse') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Reverse Transaction</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('RestPassword') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Rest Password</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('BroadCast') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Broadcast</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

                <a href="{{ url('Referral') }}">
                    <li>
                        <div class="b">
                            <div class=" custom-radius">
                                <i class="bi-solid bi-gear"></i>
                            </div>
                            <span>Referral</span>
                        </div>
                        <i class="bi bi-chevron-right arrow-right"></i>
                    </li>
                </a>

            </ul>
        </nav>

        @yield('section')
    </div>



</body>
<!-- boostarp -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<!-- boostarp -->

<script>
    function toggleMenu() {
        let nav = document.getElementById("mainNav");
        nav.classList.toggle("show");
    }

    document.addEventListener('DOMContentLoaded', () => {
        const navItems = document.querySelectorAll('nav ul a li');

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                navItems.forEach(navItem => navItem.classList.remove('active'));
                item.classList.add('active');
            });
        });
    });
</script>

</html>
