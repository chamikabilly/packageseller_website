<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>

    <div class="container mt-5 Nav-bar-custom">
        <div class="row">
            
            <?php include 'template-parts/navbar.php';?>
        
        </div>
    </div>

    <div class="container-fluid p-0 slider-container">
       
        <?php include 'template-parts/slider.php';?>
    
    </div>

    <div class="container check-availability-section">
      
             <?php include 'template-parts/availability-check.php';?>
        
    </div>

    <div class="container packages-container">
            
            <?php include 'template-parts/packages.php';?>
    
    </div>


    <div class="container aboutus-container ">

        <?php include 'template-parts/aboutus.php';?>

    </div>


    <div class="container-fluid testimonials-container py-5 ">

        <?php include 'template-parts/testimonials.php';?>

    </div>
   



    <?php include 'footer-links.php'; ?>
</body>
</html>


















