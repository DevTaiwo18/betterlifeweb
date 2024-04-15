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
        .bankTR:focus {
            font-weight: 800;
            color: black;
            background-color: lightgrey;
        }

        .tranzImg {
            width: 50%;
        }

        @media (max-width: 960px) {
            .tranzImg {
                width: 90%;
            }
        }

        .yourCopy {
            font-weight: 600;
        }
    </style>
</head>

<body>
    @extends('USER.Static')
    @section('section')
        <section class="bg-white shadow-lg sec">
            <main class="text-center">
                <h1  class="text-h6  fs-3 ps-1" style="font-weight:600; ">Fund Account</h1>
                <div class="py-3">
                    <button class="btn bankTR" onclick="transfer()"  flat>Bank Transfer</button>
                    <button class="btn bankTR" onclick="fund()" flat>Manual Funding</button>
                </div>
                <div id="showTransfer">
                    <p class="pb-3">Transfer Money to your personalized bank account</p>
                    <img class="tranzImg" src="/image/img/transferCard.png" alt="">
                </div>
                <div id="showWallet" style="display:none;">
                    <p class="pb-3">Fund your wallet by sending money to our designated account</p>
                    <img class="tranzImg" src="/image/img/fundCard.png" alt="">
                </div>
                <div>
                    <p class="yourCopy">Your Personalized bank account is shown below.</p>
                    <p class="yourCopy">Copy the account details to fund your wallet</p>
                </div>
            </main>
        </section>
    @endsection

</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-WH3I5UQb4NsZ5Pq5pTV3+OUVRzQE6I+lbF3q6mPyTkL5jWqvB1Iy6bD+y5cu5sY9" crossorigin="anonymous">
</script>
<script>
    function transfer() {
        document.getElementById("showWallet").style.display = "none";
        document.getElementById("showTransfer").style.display = "block";
    }

    function fund() {
        document.getElementById("showWallet").style.display = "block";
        document.getElementById("showTransfer").style.display = "none";
    }
</script>
</html>
