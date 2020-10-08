<?php
include_once '../includes/connectdb.php';

//UPDATE CODE
$sql = "UPDATE vendor SET Vname='$_POST[Vname]',Vaddress='$_POST[Vaddress]',
        Vphone='$_POST[Vphone]',Vemail='$_POST[Vemail]',Vbankd='$_POST[Vbankd]',
        Vpan='$_POST[Vpan]',Vgst='$_POST[Vgst]' 
        WHERE Vid='$_POST[Vid]'";

if(mysqli_query($conn,$sql))
    header("refresh:1; url=displayvendors.php");
else
    echo "Not Update";
?>