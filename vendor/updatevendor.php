<html>
<head>
    <title>Update Product</title>
</head>
<body>

<?php 
    include_once '../includes/connectdb.php';
    
    $sql = "SELECT * FROM vendor";
    $records = mysqli_query($conn,$sql);    
?> 
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Bank Account no</th>
        <th>Pan no</th>
        <th>GST no</th>
    </tr>
    <?php
    
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr><form action=updatedvendorreturn.php method=POST>";
        echo "<td><input type=text name=Vname value='".$row['Vname']."'></td>";
        echo "<td><input type=text name=Vaddress value='".$row['Vaddress']."'></td>";
        echo "<td><input type=text name=Vphone value='".$row['Vphone']."'></td>";
        echo "<td><input type=text name=Vemail value='".$row['Vemail']."'></td>";
        echo "<td><input type=text name=Vbankd value='".$row['Vbankd']."'></td>";
        echo "<td><input type=text name=Vpan value='".$row['Vpan']."'></td>";
        echo "<td><input type=text name=Vgst value='".$row['Vgst']."'></td>";
        echo "<td><input type=hidden name=Vid value='".$row['Vid']."'></td>";
        echo "<td><input type=submit>";
        echo  "</form></tr>";
    }
    ?>
</table>
</body>
</html>


