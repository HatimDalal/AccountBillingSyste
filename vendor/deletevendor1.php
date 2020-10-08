<?php
include_once '../includes/connectdb.php';

//Delete CODE
$sql = "DELETE FROM vendor WHERE Vid='$_GET[Vid]'";

if(mysqli_query($conn,$sql))
    header("refresh:1; url=displayvendors.php");
else
    echo "Not Detele";
?>