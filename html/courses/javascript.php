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
        JavaScript
        </span>
    <p>
</div>


<form action="python.php" method='POST'>

    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >JavaScript Bootcamp from Clever Kazi</h2>
                <a href="https://www.youtube.com/watch?v=Qqx_wzMmFeA&t=10883s">
                <h2>View Content</h2><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>Clever Programmer</h6>
                <h2>Here is the best free javascript programming course on the planet
                    . Made with lots of ❤️</h2>
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='clever programmer'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=Qqx_wzMmFeA&t=10883s'>
            </div>
        </div>
    </div>
</form>


<form action="python.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >JS Tutorials from DevEd</h2>
                <a href="https://www.youtube.com/watch?v=2nZiB1JItbY&list=PLDyQo7g0_nsX8_gZAB8KD1lL4j4halQBJ" target="_blank">
                <h2>View concepts</h4><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <h6>SimpleEd</h6>
                <h2>Check out my courses and become more creative!</h2>
                    
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='DevED'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=2nZiB1JItbY&list=PLDyQo7g0_nsX8_gZAB8KD1lL4j4halQBJ'>
            </div>
        </div>
    </div>
</form>


<form action="python.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Article</h6>
                <h2 >Learn JS</h2>
                <a href="https://medium.com/swlh/introduction-to-javascript-basics-cf901c05ca47" target='_blank'>
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
                <h2>JavaScript is the programming language that lets the Internet work.</h2>

                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='Medium'>
                <input type='hidden' name="link" class="btn" value='https://medium.com/swlh/introduction-to-javascript-basics-cf901c05ca47'>
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

