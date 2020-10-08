<!DOCTYPE HTML>  
<html>
<head>
    <title>Past Transactions</title>
</head>
<body>
<table>
    <tr>
        <th>Bill ID</th>
        <th>Product Name</th>
        <th>Product Reciever</th>
        <th>Date of Issue</th>
        <th>Quantity Issued</th>
        <th>Total Cost</th>
    </tr>
<?php
include_once '../includes/connectdb.php';
$sql = "SELECT Billid,Pname,Preceiver,Dateofissue,Qntyissue,Tcost FROM transaction";
$result = $conn->query($sql); 
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["Billid"]."</td><td>".$row["Pname"]."</td><td>".$row["Preceiver"].
                "</td><td>".$row["Dateofissue"]."</td><td>".$row["Qntyissue"]."</td><td>"
                .$row["Tcost"]."</td><td>";
    
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
