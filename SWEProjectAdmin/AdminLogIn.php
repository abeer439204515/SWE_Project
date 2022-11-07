<?php
require './connection.php';
if(isset($_POST['loginBtn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from admin where username = '$username' AND password='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result)> 0 ){
        header('location:adminHomePage.php');
    }
    else
        echo '<script>alert("Wrong email or password")</script>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>log-in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Header&Footer.css">
    <style>
        body {
            background-color: #d9dfcb;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            margin: 0;
            width: 100%;
            padding: 0;
            height: 100%;
        }

        .header {
            overflow: hidden;
            background-color: #ADC178;
            padding: 0px;
            top: 0;
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            clear: both;
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
            color: #519c73;
            text-align: center;
            padding: 25px;
            text-decoration: none;
            font-size: 25px;
            line-height: 25px;
            border-radius: 4px;
        }

        .back:hover {
            text-decoration: underline;
        }

        footer {
            margin-bottom: 0;
        }

        .footer {
            overflow: hidden;
            background-color: #ADC178;
            text-align: center;
            padding: 0px;
            bottom: 0;
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

        h1 {
            font-size: 40px;
            font-weight: bold;
            color: #F1FAEE;
            text-align: center;
            text-shadow: 1.5px 1.5px 7px #ADC178;
            margin-top: 10%;
        }

        form {
            width: 60%;
            font-size: 20px;
            margin: auto;

        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        #loginbutten {
            font-size: 20px;
            width: 100%;
            background-color: #ADC178;
            color: #F1FAEE;
            padding: 14px 20px;
            margin: 8px 0;
            cursor: pointer;
            transition-duration: 0.4s;
            border: 1.5px solid #ADC178;
            border-radius: 10px;
        }

        #loginbutten:hover {
            color: #ADC178;
            border: 2px solid #ADC178;
        }


    </style>
</head>
<body>

<div class="header">
    <header>

        <img src="logo.png" alt="Logo" class="logo" width="10%" height="10%">

    </header>
</div>


<main>
    <br/>
    <br/>
    <br/>
    <br/>

    <h1>Admin log-in</h1>

    <form class="modal-content animate" action="" method="post">


        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button id="loginbutten" name="loginBtn" type="submit">Login</button>

        </div>


    </form>
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