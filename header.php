<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Recomendation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        

        <nav class="menu">
            <div class="content">
            <ul class= "menu__list">
                <li class="menu__item"><a class="menu__link" href="#">link_1</a></li>
                <li class="menu__item"><a class="menu__link" href="#">link_2</a></li>
                <li class="menu__item"><a class="menu__link" href="#">link_3</a></li>
           
                <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li class='menu__item'><a class='menu__link' href='signup.php'>Profile page</a></li>";
                    echo "<li class='menu__item'><a class='menu__link menu__link--active' href='includes/logout.inc.php'>Logout</a></li>";
                }else{
                    echo "<li class='menu__item'><a class='menu__link' href='signup.php'>Sign up</a></li>";
                    echo "<li class='menu__item'><a class='menu__link menu__link--active' href='login.php'>Login</a></li>";
                }


                ?>
            </ul>
            </div>
        </nav>
    
</div>