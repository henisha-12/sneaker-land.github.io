<?php
    if(isset($_GET['ride_id'])){
        $rid=$_GET['ride_id'];
        require("../../database/connect.php");
        $q="delete from tbl_ride where ride_id='$rid'";
        if(mysqli_query($mysql,$q)){
            header("location:../Rides.php");
        }
        else{
            die("Deletion Failed!!!!".mysqli_error($mysql));
        }
    }
?>