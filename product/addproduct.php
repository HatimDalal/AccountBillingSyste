<?php
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pqnty = $_POST['pqnty'];
    $pprice = $_POST['pprice'];

    $conn = new mysqli('localhost','root','','accountsystem');
  if($conn->connect_error)
  {
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
  } 
  else 
  {
        $stmt = $conn->prepare("INSERT INTO product(pid,pname,pqnty,pprice) VALUES(?, ?, ?, ?)");
        $stmt->bind_param("isii", $pid, $pname, $pqnty, $pprice);
        $execval = $stmt->execute();
        //echo $execval;
        echo "Registration successfully...";
        header("refresh:1; url=displayproducts.php");
        $stmt->close();
        $conn->close();
  }


?>