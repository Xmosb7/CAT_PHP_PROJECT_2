<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName= "company";
    $connection = mysqli_connect($servername,$username,$password,$dbName);
    //check connection
    /*
        if (!$connection) {
        die("<br><br><strong>Connection failed: " . mysqli_connect_error()."</strong><br>");
      }
      echo "<strong>
                Connected successfully<br>
            </strong>";
    */

?>