<?php
include_once '../includes/connectdb.php';

//UPDATE CODE
$sql = "UPDATE product SET Pname='$_POST[Pname]',Pqnty='$_POST[Pqnty]',Pprice='$_POST[Pprice]' 
        WHERE Pid='$_POST[Pid]'";

if(mysqli_query($conn,$sql))
    header("refresh:1; url=displayproducts.php");
else
    echo "Not Update";
?>