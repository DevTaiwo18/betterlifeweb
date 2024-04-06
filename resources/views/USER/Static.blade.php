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
        font-weight: 700;
        display: none;
    }

    .fll {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    @media (max-width: 768px) {
        .hor {
            padding: 8px 10px;
        }

        .userimg {
            width: 6rem;
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

        .usermenu {
            display: block !important;
        }

    }
</style>

<body>
    <header class="hor">
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
            <i class="fa-solid fa-bars" id="usermenu"></i>
        </div>
    </header>

    <header class="userver">
        
    </header>
</body>

</html>
