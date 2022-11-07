<?php
require 'connection.php';
if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['DeleteButton']))
    {
      $toDelet = $_GET['DeleteButton'];
      $qurey1 = "DELETE FROM plant WHERE id =$toDelet" ;
      $result1 = mysqli_query($connect, $qurey1) ;
       
       header("Refresh:0; url='adminHomePage.php'");
    }
       ?>