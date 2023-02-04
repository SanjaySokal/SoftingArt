<header>
    <nav>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" width="250px" title="SoftingArt" alt="SoftingArt">
            </a>
        </div>
        <div class="links">
            <a href="index.php">Home</a>
            <a href="index.php#about">About</a>
            <a href="index.php#products">Products</a>
            <a href="cart.php">Cart</a>
            <a href="contact.php">Contact</a>
            <?php
                session_start();
                if (isset($_SESSION['user'])) {    
                    if ($_SESSION['type'] == '1') {
                        echo '<div class="drop-down">
                        <span>'.$_SESSION['user'].' &nbsp;<i class="fa-solid fa-chevron-down"></i></span>
                            <ul>
                                <li><a href="admin-all-products.php">All Products</a></li>
                                <li><a href="admin-add-products.php">Add Products</a></li>
                                <li><a href="order.php">Orders</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>';
                    } else {
                        echo '<div class="drop-down">
                        <span>'.$_SESSION['user'].' &nbsp;<i class="fa-solid fa-chevron-down"></i></span>
                            <ul>
                                <li><a href="order.php">Orders</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>';
                    }
                } else {
                    echo '<a href="login.php">Login</a> <a href="register.php">Register</a>';
                }
            ?>
        </div>
    </nav>
</header>