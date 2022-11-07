
<?php

$connect= mysqli_connect("localhost" , "root" , "" , "greenworld" ); 

       
        $error = mysqli_connect_error();
       
        if ($error != null) {
            echo "<p> Could not connect to the database. $error</p>";
        }
        
        ?>