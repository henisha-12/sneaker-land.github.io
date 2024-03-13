<?php
    if(isset($_GET['p_id'])){
        $pid=$_GET['p_id'];
        require("../../database/connect.php");
        $q="delete from tbl_package where p_id='$pid'";
        if(mysqli_query($mysql,$q)){
            header("location:../Package.php");
        }
        else{
            die("Deletion Failed!!!!".mysqli_error($mysql));
        }
    }
    else{

    }
?>