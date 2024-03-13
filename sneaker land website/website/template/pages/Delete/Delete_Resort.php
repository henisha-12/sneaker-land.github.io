<?php
    if(isset($_GET['r_id'])){
        $rid=$_GET['r_id'];
        require("../../database/connect.php");
        $q="delete from tbl_resort where r_id='$rid'";
        if(mysqli_query($mysql,$q)){
            header("location:../Resort.php");
        }
        else{
            die("Deletion Failed!!!!".mysqli_error($mysql));
        }
    }
?>