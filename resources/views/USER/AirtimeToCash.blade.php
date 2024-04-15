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
        .convert {
            font-size: 22px;
            font-weight: 400;
            color: grey;
            padding-left: 10px;
        }

        main{
            margin-top: -50px;
        }

        .dashform .form-control {
            box-shadow: 0 3px 2px rgba(188, 223, 228, 0.4);
            border-radius: 6px;
            background-color: rgba(211, 211, 211, 0.20);
        }

        .dashform{
            border: none !important;
        }

        .dashform .bbttnn{
            width: 100%;
            color: #fff;
            font-size: 20px;
            padding: 8px 0 !important;
            border: none !important;
            border-radius: 5px;
            background-image: linear-gradient(90deg, #0052B8 0%, rgba(255, 0, 122, 0.44) 100%);
            box-shadow: -10px -10px 20px rgba(255, 255, 255, 0.25), 12px 12px 24px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    @extends('USER.Static')
    @section('section')
        <section class="bg-white shadow-lg sec">
            <main class="px-1 px-sm-10">
                <h1 class="my-5 convert">Convert Airtime to cash</h1>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card pa-5 dashform">
                                <div class="row">
                                    <div class="col" style="line-height: 1;">
                                        <p>Number to send airtime to:</p>
                                        <p>Percentage:</p>
                                    </div>
                                    <div class="col" style="line-height: 1;">
                                        <p>Please Choose Network</p>
                                        <p>20.0%</p>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group my-5">
                                        <select class="form-control">
                                            <option>Choose Network</option>
                                            <!-- <option value="">Mtn</option> -->
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <label class="my-2 d-block" for="">Phone Number (Airtime will be sent from)</label>
                                        <input type="number" class="form-control" placeholder="234 81*** *** ***">
                                    </div>
                                    <div class="form-group my-5">
                                        <label class="my-2 d-block" for="">Amount (to be sent)</label>
                                        <input type="number" class="form-control" placeholder="#0.00">
                                    </div>
                                    <div class="form-group my-5">
                                        <label class="my-2 d-block" for="">Amount (to receive)</label>
                                        <input type="number" class="form-control" placeholder="#0.00">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary bbttnn" type="button">Buy Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </section>
    @endsection

</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-WH3I5UQb4NsZ5Pq5pTV3+OUVRzQE6I+lbF3q6mPyTkL5jWqvB1Iy6bD+y5cu5sY9" crossorigin="anonymous">
</script>



</html>
