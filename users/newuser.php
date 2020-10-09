<?php
include_once '..includes/connectdb.php';

$Uname=$_POST["Uname"];
$Password=$_POST["Password"];
$salt="genkesi";
$Password_encrypted= sha1($Password.$salt);

$sql = "INSERT INTO users(Uid,Uname,Password,Urole) 
            VALUES ('$Uid','$Uname','$Password_encrypted','$Urole')";



if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('New User has been Added');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Couldnt add User);
	</script>
	<?php
}



?>