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
            <h2>Change Password</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="change.php" method="post">
                            <h3>User Change Password</h3>
                            <div class="row justify-center">
                                <div class="col-md-12">
                                    <input type="password" placeholder="New Password" required name="password">
                                </div>
                                <div class="col-md-12">
                                    <input type="password" placeholder="Confirm New Password" required name="con_password">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn w-100">Change Now</button>
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