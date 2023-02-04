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
            <h2>Login</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="validation.php" method="post">
                            <h3>User Login</h3>
                            <div class="row justify-center">
                                <div class="col-md-12">
                                    <input type="email" autocomplete="email" placeholder="Email" required=""
                                        name="email">
                                </div>
                                <div class="col-md-12">
                                    <input type="password" autocomplete="password" placeholder="Password" required=""
                                        name="password">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn w-100">Login</button>
                                </div>
                            </div>
                            <div class="bottom-links">
                                <a href="register.php">Register Here</a>
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