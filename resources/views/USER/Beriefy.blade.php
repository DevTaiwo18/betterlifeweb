<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beriefy Page</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            text-align: center;
            margin: 6rem auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .verification-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .verification-section input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 5px;
            width: 70px;
        }

        .verification-section button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .verification-section button:hover {
            background-color: #0056b3;
        }

        .back-to-login {
            text-align: center;
        }

        .back-to-login a {
            color: #007bff;
            text-decoration: none;
        }

        .back-to-login a:hover {
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .container {
                margin: 3rem auto;
            }

            .verification-section input {
                width: 40px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Verify Phone Number</h1>
        <p>Enter the 4-Digit code sent to <br> 2348144099000 and janedoe10@gmail.com</p>
        <div class="verification-section">
            <input type="number" maxlength="1">
            <input type="number" maxlength="1">
            <input type="number" maxlength="1">
            <input type="number" maxlength="1">
            <br><br>
            <button>Verify</button>
        </div>
        <div class="back-to-login">
            <p>Didn't receive code? <button>Send Again</button></p>
            <span>or</span><br>
            <a href="{{ url('/user/Signup') }}">Sign up with another account.</a>
        </div>
    </div>
</body>

</html>
