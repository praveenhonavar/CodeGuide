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
        BlockChain
        </span>
    <p>
</div>


<form action="blockchain.php" method='POST'>

    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >Blockchain Fundamentals from Telusko</h2>
                <a href="https://www.youtube.com/watch?v=X06TQOOBrhM">
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
                <h2>. What is Blockchain? | Technology behind Bitcoin</h2>
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='clever programmer'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=X06TQOOBrhM'>
            </div>
        </div>
    </div>
</form>


<form action="blockchain.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2 >JS Tutorials from DevEd</h2>
                <a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" target="_blank">
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
                <h2>What is a blockchain and how do they work? I'll explain why blockchains are so special in simple .</h2>
                    
                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='DevED'>
                <input type='hidden' name="link" class="btn" value='https://www.youtube.com/watch?v=SSo_EIwHSd4'>
            </div>
        </div>
    </div>
</form>


<form action="python.php" method='POST'>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Article</h6>
                <h2 >Learn Blockchain</h2>
                <a href="https://medium.com/better-programming/a-technical-introduction-to-blockchain-22ab05308151" target='_blank'>
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
                <h2>A no-code, no-hype technical introduction</h2>

                <button class="btn" type='submit' name='add' >Add to todo</button>
                <input type='hidden' name="add-todo" class="btn" value='Medium'>
                <input type='hidden' name="link" class="btn" value='https://medium.com/better-programming/a-technical-introduction-to-blockchain-22ab05308151'>
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

