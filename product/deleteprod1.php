<?php
include_once '../includes/connectdb.php';

//Delete CODE
$sql = "DELETE FROM product WHERE Pid='$_GET[Pid]'";

Deleting

if(mysqli_query($conn,$sql))
    header("refresh:1; url=displayproducts.php");
else
    echo "Not Delete";
?>