<body>
    <header>
        <div class="logo">
            <a href="login.php">
                <img src="../images/logo.png" class="logo-img">
                <h1 class="logo-text">
                  <span>UiTM</span> Food Delivery
                </h1>
            </a>
        </div>
        <script>
            function changeImage(x) {
                x.classList.toggle("fa-times");
            }
        </script>
        <i class="fa fa-bars menu-toggle" onclick="changeImage(this)"></i>
        <ul class="nav">
            <li><a href="register.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>
</body>