<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>admin home HomePage</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body{
                background-color: #d9dfcb;
                margin: 0;
                width:100%;
                padding: 0;
                height:100%;
            }

            .header {
                overflow: hidden;
                background-color: #ADC178;
                padding: 0px;
                top:0;
                position:absolute;
                left:0;
                right:0;
                width:100%;
                clear: both;
            }

            .header img {
                float: left;
            }

            .header-right {
                float: right;
            }

            .back{
                font-family: Arial, Helvetica, sans-serif;
                float: left;
                color: black;
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

            table {
                width: 80%;
                margin: auto;
                border-collapse: collapse;
                text-align: center;
                margin-top: 25px;
                margin-bottom: 100px;
                font-size: 18px;
                box-shadow: 0 8px 8px 0 lightgray;

            }

            table tr:nth-child(odd) td {
                background-color: #F3F6F7;
                height: 50px;
            }

            table tr:nth-child(even) td {
                background-color: white;
                height: 50px;
            }

            th {
                background-color: rgb(71, 165, 71);
                height: 50px;
            }

            button{
                cursor: pointer;
            }




        </style>
    </head>

    <body>
        <div class="header">
            <header>

                <img src="logo.png" alt="Logo" class="logo" width="10%" height="10%">

                <div class="header-right">
                    <a class="back" href="adminLogIn.html">Log-out</a>
                </div>


            </header>
        </div>

        <br/>
        <br/>
        <br/>
        <main>
            <h3 style="margin-left: 10%; margin-top:7%;">Products</h3>


            <div>


                <a href="AddNew.html" style="text-decoration: none;"> <button style="margin-left: 10%;  background-color: rgb(197, 216, 184);"> + add a product </button></a>
                <br> <br>
                <table>
                    <tr>
                        <th>Image</th>
                        <th>Category name </th>
                        <th>Plant name</th>
                        <th>Price</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    <?php
                    require './connection.php';

                    $qurey = "SELECT * FROM plant";
                    $result = mysqli_query($connect, $qurey);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id[] = $row['id'];
                            $Category[] = $row['category'];
                            $name[] = $row['plant_name'];
                            $Img[] = $row['photo'];
                            $Price[] = $row['price'];
                        }
                    }

                    if (isset($Category)) {
                        $len = count($Category);
                        for ($i = 0; $i < $len; $i++) {
                            $a = $id[$i];
                            echo "<tr>
          <td><img src='image/$Img[$i]' alt='img' width='50' height='50'></td>
          <td>$Category[$i]</td>
          <td>$name[$i]</td>
          <td> $Price[$i] SR</td>
         
         <td>
        <form action='edit_plant.php' method='GET'>        
        <button style='background-color: rgb(101, 197, 242); color:white' name='UpdateButton' type='submit' value=$a>
            edit
        </button> 
        </form>
        </td>
        <td>
        <form action='DeleteButton.php' method='GET'> 
        <button style='background-color: red; color:white' name='DeleteButton' type='submit' value=$a>
        delete
        </button>
        </td>
        </form>
        </tr>
        
        ";
                        }
                    }
                    ?>   

                </table>


        </main>


</html>
