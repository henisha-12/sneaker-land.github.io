<?php
    if(isset($_GET['e_id'])){
        $eid=$_GET['e_id'];
        require("../../database/connect.php");
        $q="delete from tbl_event where e_id='$eid'";
        if(mysqli_query($mysql,$q)){
            header("location:../Event.php");
        }
        else{
            die("Deletion Failed!!!!".mysqli_error($mysql));
        }
    }
    else{

    }
?>