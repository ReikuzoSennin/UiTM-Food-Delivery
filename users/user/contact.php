<?php include('../../server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0c2638ec91.js" crossorigin="anonymous"></script>
    
    <!-- Custom Styles-->
    <link rel="stylesheet" href="../../css/styling.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <title>Contact</title>
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>
    
    <div class="contact">
    <div class="contact-content">
        <div class="contact-section about">
            <p>
                UiTM Food Delivery inspires to bring convenience for UiTM students
                to purchase food throughout the campus. Students are able to access
                a variety of foods just from their devices.
            </p>
            <div class="contact">
                <span><i class="fas fa-phone"></i> &nbsp; +60 926843001</span>
                <span><i class="fas fa-envelope"></i> &nbsp; uitmfooddelivery@edu.my</span>
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="contact-section contact-form" id="market">
            <h2>Contact Us<h2>
            <form action="index.php" method="post">
                <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                <textarea rows="3" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                <button class="btn btn-big contact-btn clickable">
                    <i class="fas fa-envelope"></i>
                    Send
                </button>
            </form>
        </div>
    </div>
    </div>
    
    <!-- Footer -->
    <?php include('../footer.php'); ?>
</body>
</html>