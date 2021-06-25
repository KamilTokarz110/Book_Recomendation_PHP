<?php
include_once 'header.php'
?> 
<div class="wrapper">
        <section class="signup">
        
        <h2 class= "signup__title">Login</h2>
        <form class="signup__form" action="includes/login.inc.php" method ="post">
       
        <input class="signup__form-input" type="text" name="uid" placeholder="Username/Email...">
        <input class="signup__form-input" type="password" name="pwd" placeholder="Password...">
        <button class="signup__form-btn" type="submit" name="submit">Login</button>
        
        </form>
        </section>

<?php
if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields! </p>";
        }
        else if($_GET["error"]=="wronglogin"){
                echo "<p>Incorrect login!</p>";
        }
        else if($_GET["error"]=="wrongpassword"){
                echo "<p>Incorrect password!</p>";
        }
     
}

?>

       
<?php
include_once 'footer.php'
?>