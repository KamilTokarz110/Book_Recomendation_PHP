<?php
include_once 'header.php'
?> 
<div class="wrapper">
<?php
if(isset($_SESSION["useruid"])){
        echo "<p>Hello there ". $_SESSION["useruid"] ." </p>";
      
    }
    
    ?>
    <div class="banner">
        
        <div class="banner__title">
            <h1 class="banner__title-text">What should i<br>read next</h1>
            <h2 class="banner__title-text"></h2>
        </div>
    </div>
    <section class="about">
    <div class="about__container">
        <h1 class="about__title">About Us</h1> 
        <p class="about__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo voluptatibus, cumque quaerat eveniet veniam reiciendis voluptatem dolor doloribus qui eaque incidunt repudiandae laborum numquam tempore ratione? Error ratione magni neque!
        </p>
        <div class="about__items">
        <span>Item_1</span>
        <span>Item_2</span>
        <span>Item_3</span>

        </div>

        </div>
    </section>
    <section class="feature">
        
        <div class="feature__item">
        <i class="fas fa-user feature__item-image"></i>
            <h1 class="feature__item-title">Register</h1>
            <p class="feature__item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptatum neque laborum! Laborum quibusdam cumque labore molestias ullam saepe porro facere unde blanditiis dicta iusto necessitatibus, quaerat consequuntur distinctio amet.</p>
        </div>
        <div class="feature__item--arrow">
        <i class="fas fa-arrow-right"></i>
        </div>
        <div class="feature__item">
        <i class="fas fa-book-reader feature__item-image"></i>
            <h1 class="feature__item-title">Read</h1>
            <p class="feature__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit velit cum eaque nostrum error hic minima mollitia quas et quis ipsam dolorum, enim accusamus, accusantium cupiditate voluptate? Eligendi, neque nemo!</p>
        </div>
        <div class="feature__item--arrow">
        <i class="fas fa-arrow-right"></i>
        </div>
        <div class="feature__item">
        <i class="fab fa-slideshare feature__item-image"></i>
            <h1 class="feature__item-title">Share</h1>
            <p class="feature__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit minima incidunt atque doloremque veritatis consectetur inventore optio accusamus veniam, ducimus a debitis quas dolores autem odit molestias nam et? Aperiam!</p>
        </div>
        
    </section>
       
<?php
include_once 'footer.php'
?>