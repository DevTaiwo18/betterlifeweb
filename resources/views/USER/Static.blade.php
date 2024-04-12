<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- title -->
    <title>Better Life | Transfer Transaction</title>
    <!-- title -->

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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- font -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome -->
</head>

<style>
    body {
        font-family: "Open Sans", sans-serif;
        margin: 0;
        padding: 0;
    }

    .hor {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 20px;
        border-bottom: 1px solid #ffffff;
        background: rgb(53, 96, 228);
        color: #ffffff;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 2000;
    }

    .search-container {
        position: relative;
        width: 500px;
    }

    .search-input {
        width: 100%;
        padding: 7px 10px;
        border: 1px solid #ffffff;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
    }

    .search-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #aaa;
        cursor: pointer;
    }

    .notfication {
        margin-left: 20px;
        font-size: 24px;
    }

    .bal {
        text-align: justify;
    }

    .bal h2 {
        margin: 0;
        font-size: 18px;
        font-weight: 700;
    }

    .bal p {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
    }

    .usermenu {
        font-size: 28px !important;
        font-weight: 600;
        display: none !important;
    }

    .fll {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .userver {
        height: 100%;
        width: 20%;
        background-color: #ffffff;
        position: fixed;
        padding-top: 1rem;
        overflow-y: scroll;
        scrollbar-width: none;
        bottom: 0;
        z-index: 100;
    }

    .userver::-webkit-scrollbar {
        display: none;
    }

    .vertical-navbar ul {
        list-style: none;
        margin-top: 3rem !important;
        padding: 0;
        margin: 0;
    }

    .vertical-navbar li {
        padding: 13px 20px;
        border-bottom: 1px solid #ccc;
    }

    .vertical-navbar li:last-child {
        border-bottom: none;
    }

    .vertical-navbar li a {
        font-weight: 400;
        font-size: 14px;
        color: #000;
        line-height: 24px;
        text-decoration: none;
    }

    .vertical-navbar li:hover {
        color: #000;
        background-color: #f0f0f0;
    }

    .vertical-navbar i {
        margin-right: 10px;
        font-weight: 900;
        font-size: 14px;
        color: #000;
        line-height: 16px;
    }

    .cancel-icon {
        font-size: 24px;
        cursor: pointer;
        right: 10px;
        display: none;
        top: 15px;
    }

    .usermenu {
        font-size: 24px !important;
        font-weight: 600;
        display: none !important;
    }

    .flexstatic {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        position: relative;
    }

    .sec {
        width: 78%;
        border-radius: 10px;
        right: 12px;
        padding: 30px 20px;
        position: absolute;
        margin-top: 100px;
    }

    @media (max-width: 1000px) {
        .hor {
            padding: 8px 10px;
        }

        .userimg {
            width: 8rem;
        }

        .search-container {
            display: none;
        }

        .notfication {
            display: none;
        }

        .bal h2 {
            font-size: 16px;
        }

        .bal p {
            font-size: 12px;
        }

        .show {
            display: block !important;
        }

        .usermenu {
            display: block !important;
        }

        .userver {
            width: 100%;
            height: 100vh;
            overflow-y: auto;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: none;
        }

        .vertical-navbar li {
            padding: 10px 25px;
            border-bottom: 1px solid #ccc;
        }

        .vertical-navbar li a {
            font-size: 14px;
        }

        .vertical-navbar i {
            font-size: 14px;
        }

        .sec {
            width: 100%;
            border-radius: 10px;
            right: 0px;
            padding: 30px 20px;
            position: absolute;
            margin-top: 50px;
        }
    }
</style>

<body>
    <header class="hor shadow-lg">
        <a href="{{ url('/user') }}">
            <img class="userimg" src="/image/download.png" alt="">
        </a>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
        </div>
        <div class="notfication">
            <i class="fas fa-bell"></i>
        </div>
        <div class="fll">
            <div class="bal">
                <h2>CurrUser</h2>
                <p>balance: #23.55</p>
            </div>
            <i class="fas fa-bars usermenu" id="usermenu"></i>
        </div>
    </header>

    <div class="flexstatic">
        <header class="userver bg-white shadow-lg" id="userver">
            <nav class="vertical-navbar">
                <p></p>
                <ul>
                    <li><a href="{{ url('/user/Dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="{{ url('/user/FundWallet') }}"><i class="fas fa-wallet"></i> Fund Wallet</a></li>
                    <li><a href="{{ url('/user/AirtimeAndData') }}"><i class="fas fa-mobile-alt"></i> Airtime and
                            Data</a>
                    </li>
                    <li><a href="{{ url('/user/AirtimeToCash') }}"><i class="fas fa-exchange-alt"></i> Airtime to
                            Cash</a>
                    </li>
                    <li><a href="{{ url('/user/BankUSSDs') }}"><i class="fas fa-university"></i> Bank USSDs</a></li>
                    <li><a href="{{ url('/user/BillPayment') }}"><i class="fas fa-file-invoice-dollar"></i> Bill
                            Payment</a>
                    </li>
                    <li><a href="{{ url('/user/Loan') }}"><i class="fas fa-money-bill-wave"></i> Loan</a></li>
                    <li><a href="{{ url('/user/PersonalInformation') }}"><i class="fas fa-user"></i> Personal
                            Information</a></li>
                    <li><a href="{{ url('/user/Referral') }}"><i class="fas fa-users"></i> Referral</a></li>
                    <li><a href="{{ url('/user/UpdatePassword') }}"><i class="fas fa-key"></i> Update Password</a></li>
                    <li><a href="{{ url('/user/ManagePin') }}"><i class="fas fa-thumbtack"></i> Manage Pin</a></li>
                </ul>
            </nav>
        </header>

        @yield('section')
    </div>

    <script>
        document.getElementById('usermenu').addEventListener('click', () => {
            console.log('Menu icon clicked');
            document.querySelector('#userver').classList.toggle('show');
        });
    </script>
    
</body>
<!-- boostarp -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<!-- boostarp -->

</html>
