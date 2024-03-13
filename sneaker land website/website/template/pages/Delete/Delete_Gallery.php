<?php
    if(isset($_GET['g_id'])){
        $gid=$_GET['g_id'];
        require("../../database/connect.php");
        $q="delete from tbl_photos where p_id='$gid'";
        if(mysqli_query($mysql,$q)){
            header("location:../Gallery.php");
        }
        else{
            die("Deletion Failed!!!!".mysqli_error($mysql));
        }
    }
    else{

    }
?>