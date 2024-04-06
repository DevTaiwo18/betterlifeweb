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
    .align-center img {
        width: 80%;
    }

    .formCard {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        border-radius: 30px;
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
    }

    .form-control:focus {
        box-shadow: 0 0 10px rgba(184, 0, 144, 0.8);
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
    }
</style>

<body>
    <section>
        <div class="container p-3">
            <div class="row align-items-center">
                <div class="col-6 d-none d-sm-block">
                    <div class="mb-5" style="padding-bottom: 130px;">
                        <img src="/image/img/service/service-Iphone.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card pt-5 pe-5 ps-5 rounded-xl formCard">
                        <form  id="signupForm">
                            <h1 class="text-h6 text-center fs-5">Sign Up</h1>
                            <hr class="my-3">
                            <div class="form-group my-2">
                                <label class="my-2 d-block" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);"
                                    for="">Enter your Username</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                <label class="my-2 d-block" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);"
                                    for="">Referral (Username Optional)</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                <label class="my-2 d-block" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);"
                                    for="">Phone Number</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                <label class="my-2 d-block" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);"
                                    for="">Password</label>
                                <input type="password" class="form-control" placeholder="********">
                            </div>
                            <div class="form-group my-2">
                                <label class="my-2 d-block" style="font-weight: 500; color:rgba(0, 0, 0, 0.87);"
                                    for="">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="********">
                            </div>
                            <div class="form-group my-2 d-flex align-item-center gap-3">
                                <input class="mr-3" type="checkbox">
                                <label class="terms pt-3" for=""style="font-weight: 500; color:#4e14f9;">I’ve
                                    read and agreed to Betterlife term <br>
                                    and condition</label>
                            </div>

                            <input type="submit" class="button" value="Sign Up">
                        </form>
                        <p class="text-center my-5 pt-0 pb-0">Already have an account? <a
                                href="{{ url('/user/Signin') }}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script>
    document.getElementById("signupForm").addEventListener("submit", function(event) {
        event.preventDefault();
        window.location.href = "{{ url('/user/Beriefy') }}";
    });
</script>

</html>
