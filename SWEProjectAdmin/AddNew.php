<?php 
ini_set('display_errors',1);
require './connection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Category = $_POST['cate'];
    $name = $_POST['name']; 
    $Img = $_POST['img'];
    $Cat = $_POST['cate'];
    $Price = $_POST['price'];
    $Description = $_POST['des'];

   
 $PlantId=0;
 $query1 = "SELECT * FROM plant";
 $result1 = mysqli_query($connect, $query1);
 if (mysqli_num_rows($result1)> 0 ){
        while ($row= mysqli_fetch_assoc($result1)){
            $PlantId = $row['id'];
        
        }
         
        $PlantId = $PlantId + 1;
 }
    ///INSERT INTO table_name (column1, column2, column3, ...)VALUES (value1, value2, value3, ...);
    $INSERT = "INSERT INTO `plant` (`id`,`plant_name`,`photo`,`category`,`price`,`description`)
             VALUES ('$PlantId','$name', '$Img','$Cat', '$Price', '$Description')";
    mysqli_query($connect, $INSERT);

    echo "<script> alert(Added successfully); </script>";
    echo "<SCRIPT> window.location.replace('adminHomePage.php')</SCRIPT>";
     
}
?>