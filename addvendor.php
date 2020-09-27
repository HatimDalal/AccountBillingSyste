<?php 
    include_once 'includes/connectdb.php';

    
    $sql;

    try {
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO vendor(Vid,Vname,Vaddress,Vphone,Vemail,Vbankd,Vpan,Vgst) 
        VALUES ('85','asa','sasas','85858','assas','asasas','sadasda','5845615')";
        // use exec() because no results are returned
        //$conn->exec($sql);
        mysqli_query($conn,$sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }


?> 



<!DOCTYPE HTML>  
<html>
<body>
    <form method="POST" action="#">
        Vendor Name:<input type="text" name="vname"></pr>
        Phone no:<input type="text" name="pno">
        Bank Account:<input type="text" name="bacc">
        GST no:<input type="text" name="gstno">
        Pan no:<input type="text" name="panno">
        <input type="submit" type="submit" value="Add" class="btn-Submit"/>
    </form>
</body>
</html>