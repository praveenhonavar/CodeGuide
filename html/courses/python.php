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
    <li id='python'>
        <a href="../user-landing.html" style='text-decoration:none;font-weight:bold'>
            Home
        </a>
        </li>
                    
    <li id ='python'>
        <a href="../search.html" target="_blank" style='text-decoration:none;font-weight:bold'>
            Search
         </a>
    </li>
    
    <li id='python'>
        <a href="../todo.php" style='text-decoration:none;font-weight:bold'>
           Todo
        </a>
    </li>
    </ul>

    <p id="heading" style='	font-family: 'Montserrat', sans-serif;'>
        These are some of the best </br> resources available to study <span style = "color:crimson;">
        Python
        </span>
    <p>
</div>


<form action="python.php" method='POST'>

    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >Python Fundamentals from Telusko</h2>
                <a href="https://www.youtube.com/watch?v=hEgO047GxaQ&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3">
                <h2>View Content</h2><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>Telusko</h6>
                <h2>Great resources for beginners
                Detailed explanation of every concept</h2>
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='telusko'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=hEgO047GxaQ&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3'>
            </div>
        </div>
    </div>
</form>


<form action="python.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >Python Tutorials by FreeCodeCamp</h2>
                <a href="https://www.youtube.com/watch?v=rfscVS0vtbw" target="_blank">
                <h2>View concepts</h4><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>FreeCodeCamp</h6>
                <h2>This course will give you a full introduction into all of 
                    the core concepts in python.</h2>
                    
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='FreeCodeCamp'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=rfscVS0vtbw'>
            </div>
        </div>
    </div>
</form>


<form action="python.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Article</h6>
                <h2 >Python A to Z</h2>
                <a href="https://medium.com/fintechexplained/everything-about-python-from-beginner-to-advance-level-227d52ef32d2" target='_blank'>
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
                <h2>This article aims to outline all of the key points of the Python programming language. </h2>

                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='Medium'>
                <input type='hidden' name="link" class="btn" value='https://medium.com/fintechexplained/everything-about-python-from-beginner-to-advance-level-227d52ef32d2'>
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

