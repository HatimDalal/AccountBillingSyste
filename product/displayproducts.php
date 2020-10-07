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
        <th>Quantity</th>
        <th>Price</th>
    </tr>
<?php
include_once '../includes/connectdb.php';
$sql = "SELECT pid,pname,pqnty,pprice FROM product";
$result = $conn->query($sql); 
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["pqnty"]."</td><td>".$row["pprice"]."</td><td>";
    
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
