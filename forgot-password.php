<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>SoftingArt</title>
</head>

<body>
    <?php include 'inc/header.php' ?>

    <div class="page-heading">
        <div class="container">
            <h2>Forgot Password</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="forgot.php" method="post">
                            <h3>User Forgot Password</h3>
                            <div class="row justify-center">
                                <div class="col-md-12">
                                    <input type="email" autocomplete="email" placeholder="Email" required=""
                                        name="email">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn w-100">Reset</button>
                                </div>
                            </div>
                            <div class="bottom-links">
                                <a href="register.php">Register Here</a>
                                <a href="login.php">Login Here</a>
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