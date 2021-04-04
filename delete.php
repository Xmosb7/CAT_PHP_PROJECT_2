<?php 
    require 'db.php';
    $id = $_GET['id'];
    $sql_del_q = "DELETE FROM people where id='$id'";
    if(mysqli_query($connection,$sql_del_q)){
        header("location: /");
    }

?>
