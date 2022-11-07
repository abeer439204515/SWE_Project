<?php
ini_set('display_errors',1);
require './connection.php'; 

$toEdit = $_GET['UpdateButton'];
$qurey = "SELECT * FROM plant WHERE id = '$toEdit' ";
$result = mysqli_query($connect, $qurey);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ID_plant = $row['id'];
        $name = $row['plant_name'];
        $Img = $row['photo'];
        $Cat = $row['category'];
        $Price = $row['price'];
        $Description = $row['description'];
    }
}

?>



<html>
    <head>
        
        <title>new product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="provider.css">

        <style>
            body{
                margin: 0;
                width:100%;
                padding:0;
                height:100%;
            }

            form{
                width: 50%;
                margin:auto;
            }
            .contant{
                margin-top:8%;
                margin-bottom:4%;
            }
            fieldset{
                border: 2px solid #DDE5B6;
                border-radius: 5px;
            }

            .title{
                text-align: center;
                width: fit-content;
                padding: 20px;
                margin: 10px auto;
                font-size: 2rem;
                z-index: 5;
                background-color: #fff;
                color:#A98467;
            }

            footer{
                margin-bottom:0;
            }

            .footer{

                overflow: hidden;
                background-color: #ADC178;
                text-align: center;
                padding:0px;
                margin-bottom:0;
                position:absolute;
                left:0;
                right:0;
                width:100%;
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

            .SocialMedia{
                width: 50px;
                display:inline;
            }

            .footer .SocialMedia > a {
                font-size:24px;
                width:40px;
                height:40px;
                line-height:40px;
                display:inline-block;
                text-align:center;
                border-radius:50%;
                border:1px solid #ccc;
                margin:15px 10px;
                color:inherit;
                opacity:0.75;
            }

            .copyright{
                color:#F1FAEE;
                opacity:0.75;
                font-size: 15px;
            }
        </style>
    </head>
    <body>



        <main>
            <div class="contant">
                <h3 class="title" >Update Information</h3>
                <form form action="updatePlantInformation.php" method="POST">
                    <fieldset>
                        <legend><img src="logo.PNG" alt="Logo" class="Logo" width="10%" height="40%"> </legend>
                        <label for="job">Plant name:</label> <br> 
                        <input type="text" id="name" name="name" value="<?=$name?>" required><br>

                        <label for="cate">Image:</label> <br>
                        <input type="text" id="cate" name="img" value="<?=$Img?>" required><br>

                        <label for="time">Category:</label> <br>
                        <select name="cate" value="<?=$Cat?>">
                            <option value="indoor">Indoor</option>
                            <option value="outdoor">Outdoor</option>
                        </select>

                        <br>
                        <label for="sal">Price:</label> <br>
                        <input type="text" id="sal" name="price" value="<?=$Price?>" required><br>

                        <label for="des">Description:</label>  <br>
                        <textarea name="des" rows="10" cols="64" required><?=$Description?> </textarea> <br>


                        <br> <br>
                        <button type="submit" name="toUp" value="<?=$ID_plant?>" >Submit</button>
                    </fieldset>
                </form>

            </div>
        </main>  

        
    </body>

</html>