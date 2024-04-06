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
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            margin-top: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6rem;
        }

        .align-center {
            width: 50%;
            max-width: 400px; 
        }

        .align-center img {
            width: 100%;
            height: auto;
            display: block;
            max-height: 1400px;
        }

        .form-text-container {
            width: 50%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .formCard {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            padding: 40px;
        }

        .form-control {
            display: block;
            width: 100%;
            font-size: 19px;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            outline: none;
            transition: .4s;
            margin-bottom: 20px;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(184, 0, 144, 0.8);
        }

        .text-end {
            text-align: right;
        }

        .my-5 {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .terms {
            color: #4E14F9;
        }

        .button {
            width: 100%;
            color: #fff;
            font-size: 22px;
            padding: 10px 0;
            border: none !important;
            margin-top: 20px;
            border-radius: 5px;
            background-image: linear-gradient(90deg, #0052B8 0%, rgba(255, 0, 122, 0.44) 100%);
            box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .align-center img {
                display: none;
            }

            .formCard {
                padding: 20px !important;
            }

            .form-control {
                padding: 8px !important;
            }

            .container-fluid {
                flex-direction: column;
                width: 100%;
            }

            .form-text-container {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="align-center">
            <img src="/image/img/service/service-Iphone.png" alt="">
        </div>
        <div class="form-text-container">
            <div class="formCard">
                <h1 class="fs-5">Sign In</h1>
                <hr class="my-3">
                <form id="signinForm">
                    <div class="form-group my-2">
                        <label class="my-2 d-block" for="" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);">Enter your Phone Number or Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group my-2">
                        <label class="my-2 d-block" for="" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);">Password</label>
                        <input type="password" class="form-control" placeholder="********">
                    </div>
                    <div class="text-end my-2">
                        <a href="{{ url('/user/ForgettenPassword') }}">Forgot Password</a>
                    </div>
                    <div>
                        <button class="button">Sign In</button>
                    </div>
                </form>
                <p class="text-center my-5">Don’t not have an account yet?<a href="{{ url('/user/Signup') }}">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>

<script>
    document.getElementById("signinForm").addEventListener("submit", function(event) {
        event.preventDefault();
        window.location.href = "{{ url('/user/Static') }}";
    });
</script>

</html>
