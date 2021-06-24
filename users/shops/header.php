<body>
    <header>
        <div class="logo">
            <a href="../user/index.php">
                <img src="../../images/logo.png" class="logo-img">
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
            <li><a href="../user/contact.php">About</a></li>
            <li><a href="../user/cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php  if (isset($_SESSION['user'])) : ?>
                    <strong><?php echo $_SESSION['user']['username']; ?></strong>
                    <?php endif ?>
                    <i class="fa fa-chevron-down arrow-down"></i>
                </a>
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="gerai.php?logout='1'" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
</body>