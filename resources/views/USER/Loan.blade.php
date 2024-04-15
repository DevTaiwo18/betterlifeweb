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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome -->

    <style>
        .quick-link-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .quick-link-text {
            font-weight: bold;
            font-size: 14px;
        }

        .bg-blue-darken-4 {
            background-color: #172b4d;
        }

        .bg-yellow {
            background-color: #ffc107;
        }

        .bg-red-lighten-2 {
            background-color: #ff6347;
        }

        .bg-purple {
            background-color: #6a1b9a;
        }

        .pa-2 {
            padding: 0.8rem;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .card-body {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 1rem !important;
            padding-left: 60px !important;
            padding-right: 60px !important;
        }

        .textd {
            padding-top: 12px;
        }

        .bg-blue {
            background-color: blue;
        }

        .bg-blue-lighten-2 {
            background-color: lightblue;
        }

        .popular-container {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 1rem !important;
        }

        .popular-container .card {
            margin-bottom: 20px;
            width: 19%;
        }

        .popular-container .card img {
            width: 100%;
        }

        @media (max-width: 1326px) {
            .card-body {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
                margin-bottom: 10px;
            }

            .container-fluid {
                padding: 0;
                margin: 0%;
            }

            .popular-sales {
                display: none !important;
            }

        }

        @media (max-width: 500px) {
            .card-body {
                justify-content: start !important;
                gap: 1rem !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }
    </style>
</head>

<body>
    @extends('USER.Static')
    @section('section')
        <section class="bg-white shadow-lg sec">
            <div class="overview">
                <div class="">
                    <h1 class="text-h6  fs-5 ps-1" style="font-weight:600; ">Overview</h1>
                    <div class="">
                        <div class="row pb-10 pt-1">
                            <div class="col-md-4">
                                <div class="card shadow-lg">
                                    <div class="card-body align-center pa-5">
                                        <div class="text-right">
                                            <i class="fa-solid fa-credit-card bg-blue text-white pa-2 rounded-lg"></i>
                                        </div>
                                        <div class="textd">
                                            <p class="text-subtitle-1"
                                                style="line-height: 0; font-weight:bold; font-size:14px; ">Wallet Balance
                                            </p>
                                            <h4 class="text-h6 " style="font-weight:bold; line-height:1; font-size:14px;">
                                                #0.0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-lg">
                                    <div class="card-body align-center pa-5">
                                        <div class="text-right">
                                            <i class="fas fa-users bg-blue-lighten-2 text-white pa-2 rounded-lg"></i>
                                        </div>
                                        <div class="textd">
                                            <p class="text-subtitle-1 "
                                                style="line-height: 0; font-weight:bold; font-size:14px; ">Referral Bonus
                                            </p>
                                            <h4 class="text-h6 " style="font-weight:bold;font-size:14px; line-height:1; ">
                                                #0.0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-lg">
                                    <div class="card-body align-center pa-5">
                                        <div class="text-right">
                                            <i class="fas fa-circle-radiation bg-purple text-white pa-2 rounded-lg"></i>
                                        </div>
                                        <div class="textd">
                                            <p class="text-subtitle-1 "
                                                style=" font-weight:bold; font-size:14px; line-height: 0;">My Total Referral
                                            </p>
                                            <h4 class="text-h6 " style="font-weight:bold; font-size:14px; line-height:1; ">0
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quick" style="margin-top: 40px;">
                <h1 class="text-h6 fs-5 ps-1" style="font-weight:600;">Quick Links</h1>
                <div class="">
                    <div class="row pb-10 pt-1">
                        <div class="col-md-4">
                            <div class="card mb-3 shadow-lg">
                                <div class="card-body align-center pa-5 ">
                                    <div class="text-right">
                                        <i class="fas fa-clock-rotate-left text-white bg-blue-darken-4 pa-2 rounded-lg"></i>
                                    </div>
                                    <div class="textd">
                                        <p class="quick-link-text">Transactions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3 shadow-lg">
                                <div class="card-body align-center pa-5 ">
                                    <div class="text-right">
                                        <i class="fas fa-clock-rotate-left text-white bg-blue-darken-4 pa-2 rounded-lg"></i>
                                    </div>
                                    <div class="textd">
                                        <p class="quick-link-text">Data Transactions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3 shadow-lg">
                                <div class="card-body align-center pa-5 ">
                                    <div class="text-right">
                                        <i class="fas fa-clock-rotate-left  bg-yellow text-white pa-2 rounded-lg"></i>
                                    </div>
                                    <div class="textd">
                                        <p class="quick-link-text">Fund Wallet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3 shadow-lg">
                                <div class="card-body align-center pa-5 ">
                                    <div class="text-right">
                                        <i class="fas fa-clock-rotate-left text-white bg-red-lighten-2 pa-2 rounded-lg"></i>
                                    </div>
                                    <div class="textd">
                                        <p class="quick-link-text">Become a Retailer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3 shadow-lg">
                                <div class="card-body align-center pa-5 ">
                                    <div class="text-right">
                                        <i class="fas fa-clock-rotate-left bg-yellow text-white pa-2 rounded-lg"></i>
                                    </div>
                                    <div class="textd">
                                        <p class="quick-link-text">Wallet Summary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Quick Links -->
                    </div>
                </div>
            </div>

            <div class="popular-sales">
                <div class="">
                    <h1 class="text-h6 fs-5 ps-1" style="font-weight:600; margin-top:40px;">Popular Sales</h1>
                    <div class="popular-container">
                        <div class="card shadow-lg text-center my-3">
                            <img src="/image/img/dashboard/dashwifi.png" alt="">
                            <p class="text-blue text-h6" style="line-height: 0; font-weight:bold; font-size:14px; ">
                                Airtime and Data</p>
                        </div>
                        <div class="card shadow-lg text-center my-3">
                            <img src="/image/img/dashboard/dashwifi.png" alt="">
                            <p class="text-blue text-h6" style="line-height: 0; font-weight:bold; font-size:14px; ">
                                Airtime to Cash</p>
                        </div>
                        <div class="card shadow-lg text-center my-3">
                            <img src="/image/img/dashboard/dashwifi.png" alt="">
                            <p class="text-blue text-h6" style="line-height: 0; font-weight:bold; font-size:14px; ">Loan
                            </p>
                        </div>
                        <div class="card shadow-lg text-center my-3">
                            <img src="/image/img/dashboard/dashwifi.png" alt="">
                            <p class="text-blue text-h6" style="line-height: 0; font-weight:bold; font-size:14px; ">Bill
                                Payment</p>
                        </div>
                        <div class="card shadow-lg text-center my-3">
                            <img src="/image/img/dashboard/dashwifi.png" alt="">
                            <p class="text-blue text-h6" style="line-height: 0; font-weight:bold; font-size:14px; ">
                                Transfer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-WH3I5UQb4NsZ5Pq5pTV3+OUVRzQE6I+lbF3q6mPyTkL5jWqvB1Iy6bD+y5cu5sY9" crossorigin="anonymous">
</script>

</html>
