<!DOCTYPE HTML>  
<html>
<head>
    <title>Products</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Bank Account no</th>
        <th>Pan no</th>
        <th>GST no</th>
    </tr>
<?php
include_once '../includes/connectdb.php';
$sql = "SELECT Vid,Vname,Vaddress,Vphone,Vemail,Vbankd,Vpan,Vgst FROM vendor";
$result = $conn->query($sql); 
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["Vid"]."</td><td>".$row["Vname"]."</td><td>".$row["Vaddress"]."</td><td>".$row["Vphone"]."</td><td>"
        .$row["Vemail"]."</td><td>".$row["Vbankd"]."</td><td>".$row["Vpan"]."</td><td>".$row["Vgst"]."</td><td>";
    
    } echo "</table>";
}
else{
    echo "0 result";
}
$conn-> close();
?>


</body>
</table>
</html>
