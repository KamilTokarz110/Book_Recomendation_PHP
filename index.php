<?php
include_once 'header.php'
?> 
<div class="wrapper">
<?php
if(isset($_SESSION["useruid"])){
        echo "<p>Hello there ". $_SESSION["useruid"] ." </p>";
      
    }
    
    ?>
        <div class="slider">slider</div>
        <section class="main-articles">main-article</section>
        <section class="book-list">book-list</section>
       
<?php
include_once 'footer.php'
?>