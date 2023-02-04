<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>SoftingArt</title>
</head>

<body>
    <?php 
        include 'inc/header.php';
        
        if (isset($_SESSION['user'])) {
            header("location: index.php");
        }
    ?>

    <div class="page-heading">
        <div class="container">
            <h2>Register</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="reg.php" method="post">
                            <h3>User Register</h3>
                            <div class="row justify-center">
                                <div class="col-md-12">
                                    <input type="text" autocomplete="name" placeholder="Name" required="" name="name">
                                </div>
                                <div class="col-md-12">
                                    <input type="email" autocomplete="email" placeholder="Email" required=""
                                        name="email">
                                </div>
                                <div class="col-md-12">
                                    <input type="tel" autocomplete="phone" placeholder="Phone" required="" name="phone">
                                </div>
                                <div class="col-md-12">
                                    <input type="password" autocomplete="password" placeholder="Password" required=""
                                        name="password">
                                </div>
                                <div class="col-md-12">
                                    <input type="password" autocomplete="con_password" placeholder="Confirm password"
                                        required="" name="con_password">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" autocomplete="address" placeholder="Address" required=""
                                        name="address">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn w-100">Register</button>
                                </div>
                            </div>
                            <div class="bottom-links">
                                <a href="login.php">Login Here</a>
                                <a href="forgot-password.php">Forgot Passowrd</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php' ?>
</body>

</html>

<script>
</script>