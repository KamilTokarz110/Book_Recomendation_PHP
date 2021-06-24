<?php
include_once 'header.php'
?> 
<div class="wrapper">
        <section class="signup">
        
        <h2 class= "signup__title">Login</h2>
        <form class="signup__form" action="includes/login.inc.php" method ="post">
       
        <input class="signup__form-input" type="text" name="name" placeholder="Username/Email...">
        <input class="signup__form-input" type="password" name="pwd" placeholder="Password...">
        <button class="signup__form-btn" type="submit" name="submit">Login</button>
        
        </form>
        </section>


       
<?php
include_once 'footer.php'
?>