<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

session_start();


$user=$_POST['user'];
$pass=$_POST['pass'];

// echo $user;
// echo $pass;

$_SESSION['user']=$user;

$server='localhost';
$dbuser = 'root';
$password = '';
$db = 'users';


// mysql_connect($server,$dbuser,$password);
// mysql_select_db($db);

$conn = new mysqli($server,$dbuser,$password,$db);

	$sqllogin = "select username,password from login where 
				 username= '$user' and password= '$pass'";

	$result = mysqli_query($conn,$sqllogin);

	$row = mysqli_fetch_array($result);

	if($row['username']==$user && $row['password']==$pass){

		echo("<script>

		swal({
			title: 'Success!',
			text: 'You have Loged In Successfully!',
			icon: 'success',
		  });

		  setTimeout(
			  function (){
				location.replace('../todo.php');
			  },1000
			);

		</script>");
		// echo('yoo');
	}

	else{
		echo'failed';
	}
?>



</body>
</html>

