<?php
include_once '../includes/connectdb.php';

//Delete CODE
$sql = "DELETE FROM product WHERE Pid='$_GET[Pid]'";

if(mysqli_query($conn,$sql))
    header("refresh:1; url=displayproducts.php");
else
    echo "Not Update";
?>