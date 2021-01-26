<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

$user=$_POST['user'];
$pass=$_POST['pass'];

$email =$_POST['email'];
$phone =$_POST['phone'];


$server='localhost';
$dbuser = 'root';
$password = '';
$db = 'users';


$conn = new mysqli($server,$dbuser,$password,$db);


$sqlregister = "insert into login (username,password,email,phone) values('$user','$pass','$email','$phone')";

if($conn->query($sqlregister) === TRUE){
	echo("<script>

	swal({
		title: 'Success!',
		text: 'You have Registered Successfully!',
		icon: 'success',
	  });

	  setTimeout(
		  function (){
			location.replace('../search.html');
		  },1000
		);

	</script>");
}

else{
	
	echo'fail'.$conn->error;
}

?>

</body>
</html>

