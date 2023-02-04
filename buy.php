<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>SoftingArt</title>
</head>

<body>
    <?php
        include 'inc/header.php';
        
        if(!isset($_SESSION['user'])){
            header("location: login.php");
        }
    ?>

    <div class="page-heading">
        <div class="container">
            <h2>Checkout</h2>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="checkout-page">
                <?php
                    if(isset($_GET['id'])) {
                        include 'connection.php';
                        $name = "";
                        $phone = "";
                        $address = "";
                        $result2 = $conn->query("SELECT `name`, `phone`, `address` FROM `user`  WHERE email = '".$_SESSION['user']."'");
                        if ($result2->num_rows > 0) {
                            while($row = $result2->fetch_assoc()) {
                                $name = $row['name'];
                                $phone = $row['phone'];
                                $address = $row['address'];
                            }
                        }
                        $result = $conn->query("SELECT * FROM `cart` INNER JOIN products ON cart.product_id = products.id WHERE cart.product_id = '".$_GET['id']."'");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                ?>
                    <img src="<?php echo $row['image'] ?>" title="<?php echo $row['name'] ?>" alt="<?php echo $row['name'] ?>">
                    <p><?php echo $row['name'] ?></p>
                    <h3>Your Details</h3>
                    <p><?php echo $address ?></p>
                    <p><?php echo $name ?></p>
                    <p><?php echo $row['costumer_email'] ?></p>
                    <p><?php echo $phone ?></p>
                    <div class="cod">
                        <input checked type="radio" required name="cod" id="cod">
                        <label for="cod">Cash on Delivery</label>
                    </div>
                    <a href="place-order.php?id=<?php echo $row['id'] ?>" class="btn">Place Order</a>
                <?php
                            }
                        } else {
                            echo "<p>Failed to load Checkout...</p>";
                        }
                    } else {
                        echo "<p>Failed to load Checkout...</p>";
                    }
                ?>
            </div>
        </div>
    </section>
    <?php include 'inc/footer.php' ?>
</body>

</html>