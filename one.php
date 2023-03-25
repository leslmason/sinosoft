<?php 
/*$email = $_POST['email'];
$pw = $_POST['pw'];
$cpassword = $_POST['cpassword']; 
    
$mysqli = new mysqli("localhost","techvboa_techus","Askme@123","techvboa_techy");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Turn autocommit off
$mysqli -> autocommit(FALSE);

// Insert some values
$mysqli -> query("INSERT INTO tb1 (email,pw,cpassword)
VALUES ('$email','$pw','$cpassword')");


// Commit transaction
if (!$mysqli -> commit()) {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  exit();
}

$mysqli -> close();*/
?>
<script language="javascript">
	alert("Thank you for contacting us");
	window.location="http://petricpine.in.net"
</script>