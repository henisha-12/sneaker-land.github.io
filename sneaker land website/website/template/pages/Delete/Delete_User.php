<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require("../../database/connect.php");
        $q="delete from tbl_usr where id='$id'";
        if(mysqli_query($mysql,$q)){
            header("location:../users.php");
        }
        else{
            die("Deletion Failed!!!!".mysqli_error($mysql));
        }
    }
    else{

    }
?>