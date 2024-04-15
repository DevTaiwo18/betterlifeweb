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

        .profileInput {
            border: 1px solid rgba(0, 0, 0, 0.09);
            width: 100%;
            margin: auto;
        }

        .profileInput input {
            min-width: 90%;
            outline: none;
            border: none;
        }

        img{
            width: 5rem;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .imgg{
            display: flex;
            align-items: center;
        }

        .bbttnn {
            width: 100%;
            color: #fff;
            font-size: 20px;
            padding: 8px 0 !important;
            border: none !important;
            border-radius: 5px;
            margin-bottom: 10px;
            background-image: linear-gradient(90deg, #0052B8 0%, rgba(255, 0, 122, 0.44) 100%);
            box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
        }

        .dashform{
            border: none !important;
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

            <div class="pl-sm-10 pl-2" style="margin-top: 60px;">
                <h1 class="text-h6  fs-5 ps-1 mb-4 ms-1" style="font-weight:600; ">Profile Information</h1>
                <div class="">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="card py-6 px-3 text-center dashform shadow-lg">
                                <div class="immgg">
                                    <img src="/image/img/profileImg.png" alt="">
                                </div>
                                <div class="profileInput px-1 my-1 rounded-lg">
                                    <input class="py-3" type="text" placeholder="Username">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <div class="profileInput px-1 my-1 rounded-lg">
                                    <input class="py-3" type="text" placeholder="First Name">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <div class="profileInput px-1 my-1 rounded-lg">
                                    <input class="py-3" type="text" placeholder="Last Name">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <div class="profileInput px-1 my-1 rounded-lg">
                                    <input class="py-3" type="text" placeholder="Email">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <div class="profileInput px-1 my-1 rounded-lg">
                                    <input class="py-3" type="text" placeholder="Phone Number">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <button class="btn btn-primary mt-3 bbttnn">Save</button>
                            </div>
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
