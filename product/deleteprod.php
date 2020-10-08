<html>
<head>
    <title>Delete Product</title>
</head>
<body>

<?php 
    include_once '../includes/connectdb.php';
    
    $sql = "SELECT * FROM product";
    $records = mysqli_query($conn,$sql);    
?> 
<table>
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <?php
    
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['Pid']."</td>";
        echo "<td>".$row['Pname']."</td>";
        echo "<td>".$row['Pqnty']."</td>";
        echo "<td>".$row['Pprice']."</td>";
        echo "<td><a href=deleteprod1.php?Pid=".$row['Pid'].">Delete</a></td>";


        /*echo "<tr><form action=# method=POST>";
        echo "<td><input type=text name=Pname value='".$row['Pname']."'></td>";
        echo "<td><input type=text name=Pqnty value='".$row['Pqnty']."'></td>";
        echo "<td><input type=text name=Pprice value='".$row['Pprice']."'></td>";
        echo "<td><input type=hidden name=Pid value='".$row['Pid']."'>";
        echo "<td><input type=submit>";
        echo  "</form></tr>";*/
    }
    ?>
</table>
</body>
</html>


