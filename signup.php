<?php
include_once 'header.php'
?> 
<div class="wrapper">
        <section class="signup">
        
        <h2 class= "signup__title">Sign Up</h2>
        <form class="signup__form" action="includes/signup.inc.php" method ="post">
       
        <input class="signup__form-input" type="text" name="name" placeholder="Full name...">
        <input class="signup__form-input" type="text" name="email" placeholder="Email...">
        <input class="signup__form-input" type="text" name="uid" placeholder="Username...">
        <input class="signup__form-input" type="password" name="pwd" placeholder="Password...">
        <input class="signup__form-input" type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button class="signup__form-btn" type="submit" name="submit">Sign Up</button>
        
        </form>
        </section>

<?php

if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields! </p>";
        }
        else if($_GET["error"]=="invaliduid"){
                echo "<p>Choose a proper username!</p>";
        }
        else if($_GET["error"]=="invalidemail"){
                echo "<p>Choose a proper email!</p>";
        }
        else if($_GET["error"]=="passwordsdontmatch"){
                echo "<p>Password doesn't match!</p>";
        } else if($_GET["error"]=="stmtfield"){
                echo "<p>Something went wrong, try again!</p>";
        } else if($_GET["error"]=="usernametaken"){
                echo "<p>Username already taken</p>";
        } else if($_GET["error"]=="none"){
                echo "<p>You have signed up!</p>";
        }
}

?>
       
<?php
include_once 'footer.php'
?>