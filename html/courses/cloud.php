<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>


<body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class ="nav-items">
<ul>
    <li id='js'>
        <a href="../user-landing.html" style='text-decoration:none;font-weight:bold'>
            Home
        </a>
        </li>
                    
    <li id ='js'>
        <a href="../search.html" target="_blank" style='text-decoration:none;font-weight:bold'>
            Search
         </a>
    </li>
    
    <li id='js'>
        <a href="../todo.php" style='text-decoration:none;font-weight:bold'>
           Todo
        </a>
    </li>
    </ul>

    <p id="heading">
        These are some of the best resources </br>available to study 
        <span style = "color:crimson;">
        C++
        </span>
    <p>
</div>


<form action="cloud.php" method='POST'>

    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >CLoud Computing</h2>
                <a href="https://www.youtube.com/watch?v=M988_fsOSWo&list=PLEiEAq2VkUUIJ3o1tehvtux0_Ynf42CBN">
                <h2>View Content</h2><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>Cloud Computing</h6>
                <h2>Cloud computing is a popular practice involving the internet to store and manage your data on th...</h2>
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='clever programmer'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=M988_fsOSWo&list=PLEiEAq2VkUUIJ3o1tehvtux0_Ynf42CBN'>
            </div>
        </div>
    </div>
</form>


<form action="cloud.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Article</h6>
                <h2 >Learn CLoud</h2>
                <a href="https://medium.com/@vickynimbalkar/cloud-computing-for-beginners-ceb417658912" target='_blank'>
                <h2>Click to Read</h2><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>Medium</h6>
                <h2>Cloud Computing means storing and accessing data and programs in ‘the cloud’. When I say “Cloud” it doesn’t mean the visible mass of condensed watery vapor floating in the atmosphere you see outside your window right now. .</h2>

                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='Medium'>
                <input type='hidden' name="link" class="btn" value='https://medium.com/@vickynimbalkar/cloud-computing-for-beginners-ceb417658912'>
            </div>
        </div>
    </div>
</form>




<?php

$server='localhost';
$dbuser = 'root';
$password = '';
$db = 'users';

$conn = new mysqli($server,$dbuser,$password,$db);


if(isset($_SESSION['user']))
{
    // echo('pfefk');
    $username =  $_SESSION['user'];

}

// echo $username;

if(isset($_POST['add-todo'])){
    $name = $_POST['add-todo'];
    $link = $_POST['link'];

// echo('pppp');
// echo($name);
// echo($link);

$sqladdTodo = "insert into todo(name,link,username) values('$name','$link','$username')";

if($conn->query($sqladdTodo) === TRUE){

    echo("<script>
    
    swal({
        title: 'Updated TODO!',
        text: 'Added to your TODO list',
        icon: 'success',
      });
     </script>");
    // echo"<script>location.replace('../todo.php')</script>";
}
}
else{
	
	echo'fail';
}

?>


</body>
</html>

