<?php
require 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from plant where id = '$id' ";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_row();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Product Detail</title>

    <style>
        body {
            margin: 0;
            width: 100%;
            padding: 0;
            height: 100%;
        }

        .header {
            overflow: hidden;
            background-color: #A98467;
            padding: 0px;
            top: 0;
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            clear: both;
        }

        .header h1 {
            position: absolute;
            margin-top: 0;
            padding-top: 2%;
            margin-left: 13%;
            letter-spacing: 3px;
            transform: translate(-30%, -30%);
            font-family: Courier, monospace;
            text-align: left;
            text-transform: uppercase;
            text-shadow: 1px 1px 2px white, 0 0 25px #F0EAD2, 0 0 5px #F0EAD2;

        }

        .header img {
            float: left;
        }

        .header-right {
            float: right;
        }

        .back {
            font-family: Arial, Helvetica, sans-serif;
            float: left;
            color: #1D3557;
            text-align: center;
            padding: 25px;
            text-decoration: none;
            font-size: 25px;
            line-height: 25px;
            border-radius: 4px;
        }

        nav {

            background-color: #DDE5B6;
            display: flex;
            justify-content: space-between;
            height: 70px;
            width: 100%;
            align-items: center;
            padding: 0px 0px;
            z-index: 10;
            margin-top: 60px;
        }

        nav ul {
            float: right;
            height: 70px;
            justify-content: center;
            display: inline-block;
            margin: auto;
        }

        nav ul li {
            display: inline-block;
            line-height: 40px;

        }

        nav ul li a {
            font-weight: bold;
            float: left;
            font-size: 35px;
            font-family: Courier, monospace;
            text-decoration: none;
            color: #A98467;
            padding: 1.5rem;
            align-items: center;
            justify-content: center;

        }

        a:hover {
            background-color: #A98467;
            color: rgba(240, 234, 210);
            transform: scale(90%, 100%);
            transition: transform 1.5s;

        }

        .logo {
            position: absolute;
            top: -1.5em;
            left: 1em;
            shadow: 0 4px 8px 0 #A98467, 0 6px 20px 0 #A98467;
        }

        .cart {
            position: absolute;
            top: 1em;
            right: 5em;
            z-index: 5;
        }

        .breadcrumb a {
            margin: 1%;
            font-size: 22px;
            color: #FFFFFF;
            font-family: Courier, monospace;
        }

        .breadcrumb {
            background-color: #A98467;
            line-height: 1em;
            padding: 1% 3%;
        }

        .breadcrumb img {
            width: 20px;
            height: 20px;
        }

        main {
            margin-top: 10%;
            margin-bottom: 10%;
        }

        .container {
            background-color: #F0EAD2;
            width: 90%;
            margin: auto;
            padding: 30px;
            display: flex;
            justify-content: space-around;
        }

        #plantPhoto {

            width: 95%;
            margin-right: 0px;
        }

        .Details {
            padding: 0;
            font-family: Courier, monospace;
            width: 95%;
            margin-left: 0px;
        }

        .title {
            font-size: 18px;
        }

        .discription {
            font-size: 22px;
        }

        #discription {
            font-size: 18px;
        }

        #plantName {
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
        }

        button {
            cursor: pointer;
            font-size: 16px;
            border: none;
            border-radius: 10%;
            height: 50px;
            background-color: #ADC178;
            color: white;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            opacity: 0.8;
        }

        footer {
            margin-bottom: 0;
        }

        .footer {

            overflow: hidden;
            background-color: #ADC178;
            text-align: center;
            padding: 0px;
            margin-bottom: 0;
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            clear: both;
        }

        .fa-twitter {
            background: #55ACEE;
        }

        .fa-facebook {
            background: #3B5998;
        }

        .fa-instagram {
            background: #E1306C;
        }

        .SocialMedia {
            width: 50px;
            display: inline;
        }

        .footer .SocialMedia > a {
            font-size: 24px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin: 15px 10px;
            color: inherit;
            opacity: 0.75;
        }

        .copyright {
            color: #F1FAEE;
            opacity: 0.75;
            font-size: 15px;
        }
    </style>

</head>
<body>
<header>

    <div class="header">


        <img src="logo.png" alt="logo" class="logo" width="100" height="100">
        <h1>Green World</h1>
        <div class="header-right">
            <a class="back" alt="cart page" href="cart.html"><img src="image/cart.png" alt="cart" width="30"
                                                                  height="30"> </a>
        </div>

    </div>


    <nav class="navbar-list">

        <ul>
            <li><a href="index.html" id="n1">HomePage </a></li>
            <li><a href="Shoping.html" id="n2">Shopping</a></li>
        </ul>

    </nav>


    <div class="breadcrumb">
        <a href="index.html">HomePage </a>
        <img src="image/arrow.png" alt="/" width="50" height="50">
        <a href="Shoping.html">Shopping</a>
        <img src="image/arrow.png" alt="/" width="50" height="50">
        <a href=" "><?php echo $row[3] . ' plants'; ?></a>
        <img src="image/arrow.png" alt="/" width="50" height="50">
        <a href=" "><?php echo $row[1]; ?></a>
    </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="phpto">
            <img id="plantPhoto" src="image/<?php echo $row[2]; ?>">
        </div>

        <div class="Details">
            <p id="plantName"> <?php echo $row[1]; ?></p>
            <div class="discription">
                <p class="title">DISCRIPTION:</p>
                <p id="discription"><?php echo $row[5]; ?></p>
                <div class="pric">
                    <p class="title">PRICE: <span id="price"><?php echo $row[4]; ?> </span> SR</p>


<!--                    <div class="Add-btn">-->
<!---->
<!--                        <button> ADD TO CART</button>-->
<!--                    </div>-->


                </div>

            </div>
        </div>

    </div>
</main>
<div class="footer">
    <footer>

        <div class="SocialMedia">
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>

        <div class="copyright">
            <p> © 2020 Copyright: JOB.com </p>
        </div>

    </footer>
</div>
</body>
</html>
