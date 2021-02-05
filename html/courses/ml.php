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
        Machine Learning
        </span>
    <p>
</div>


<form action="ml.php" method='POST'>

    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >Code Basics</h2>
                <a href="https://www.youtube.com/watch?v=gmvvaobm7eQ&list=PLeo1K3hjS3uvCeTYTeyfe0-rN5r8zn9rw">
                <h2>View Content</h2><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>Code Basics</h6>
                <h2>Introduction on machine learning to begin machine learning with python tutorial series. </h2>
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='clever programmer'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=gmvvaobm7eQ&list=PLeo1K3hjS3uvCeTYTeyfe0-rN5r8zn9rw'>
            </div>
        </div>
    </div>
</form>


<form action="ml.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >Google Dev</h2>
                <a href="https://www.youtube.com/watch?v=cKxRvEZd3Mw&list=RDQMNEqCnF2ohBA&start_radio=1" target="_blank">
                <h2>View concepts</h4><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>Google Dev</h6>
                <h2>Six lines of Python is all it takes to write your first machine learning program! In this episode, we'll ...</h2>
                    
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='DevED'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=cKxRvEZd3Mw&list=RDQMNEqCnF2ohBA&start_radio=1'>
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

