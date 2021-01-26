<?php

session_start();

?>

<?php

$server='localhost';
$dbuser = 'root';
$password = '';
$db = 'users';



$conn = new mysqli($server,$dbuser,$password,$db);

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course-list</title>
    <link rel="stylesheet" href="courses/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>


<body>

<div class ="nav-items">
<ul>
    <li id='todo'>
        <a href="user-landing.html" style='text-decoration:none;font-weight:bold'>
            Home
        </a>
        </li>
                    
    <li id ='todo'>
        <a href="search.html" target="_blank" style='text-decoration:none;font-weight:bold'>
            Search
         </a>
    </li>
    
    <li id='todo' >
        <a href="#" style='text-decoration:none;font-weight:bold'>
           Todo
        </a>
    </li>
    </ul>

    <p id="heading">
        Here's Your TODO List
    <p>
</div>


<?php
if(isset($_SESSION['user']))
{
    // echo('pfefk');
    $username =  $_SESSION['user'];

}


$query = "select * from todo where username='$username'";

$res = mysqli_query($conn,$query);

if(mysqli_num_rows($res) > 0)
{
    while($row = mysqli_fetch_array($res))

{

?>


<div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2> <?php echo $row['name'];?></h2>
                <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="course-info">
                <!-- <div class="progress-container">
                    <div class="progress"></div>
                    <span class="progress-text">
                        6/9 Challenges
                    </span>
                </div> -->
                <!-- <h6></h6> -->
                <h2><?php echo $row['name'];?></h2>
                <h4>Finish off this task soon</h4>
                <button class="btn" onclick=hide()>Mark as Done</button>
            </div>
        </div>
    </div>
<h4> 
   

</h4>

<?php

}
}


else
{
    echo("<script>location.replace('search.html')</script>");
}


?>

<script>

function hide() {
    var d=document.getElementsByClassName("courses-container");
    l=d.length;
    d[l-1].remove();
}

</script>

</body>
</html>