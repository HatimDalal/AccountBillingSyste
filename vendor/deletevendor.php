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
    
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['Vid']."</td>";
        echo "<td>".$row['Vname']."</td>";
        echo "<td>".$row['Vaddress']."</td>";
        echo "<td>".$row['Vphone']."</td>";
        echo "<td>".$row['Vemail']."</td>";
        echo "<td>".$row['Vgst']."</td>";
        echo "<td>".$row['Vpan']."</td>";
        echo "<td><a href=deletevendor1.php?Vid=".$row['Vid'].">Delete</a></td>";
    }
    ?>
</table>
</body>
</html>


