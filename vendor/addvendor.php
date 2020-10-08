<?php 
    //include_once 'includes/connectdb.php';

    
    //$sql;
    $vid = $_POST['vid'];
    $vname = $_POST['vname'];
    $vaddress = $_POST['vaddress'];
    $vphone = $_POST['vphone'];
    $vemail = $_POST['vemail'];
    $vbankd = $_POST['vbankd'];
    $vpan = $_POST['vpan'];
    $vgst = $_POST['vgst'];

    //try {
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*$sql="INSERT INTO vendor(Vid,Vname,Vaddress,Vphone,Vemail,Vbankd,Vpan,Vgst) 
        VALUES ('25','asd','wrsas','85858','assas','asasas','sadasda','5845615')";
        // use exec() because no results are returned
        //$conn->exec($sql);
        mysqli_query($conn,$sql);*/
        $conn = new mysqli('localhost','root','','accountsystem');
  if($conn->connect_error)
  {
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
  } 
  else 
  {
        $stmt = $conn->prepare("INSERT INTO vendor(Vid,Vname,Vaddress,Vphone,Vemail,Vbankd,Vpan,Vgst) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        //echo $mysqli -> error;die;
        $stmt->bind_param("ississsi", $vid, $vname, $vaddress, $vphone, $vemail, $vbankd, $vpan, $vgst);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        header("refresh:1; url=displayvendors.php");
        $stmt->close();
        $conn->close();
  }

       /* echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }*/


?> 