<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>SoftingArt</title>
</head>

<body>
    <?php include 'inc/header.php' ?>
    <?php
        include 'connection.php';
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = 1;
        }
        $check = TRUE;
        if(isset($_SESSION['user'])) {
            $result2 = $conn->query("SELECT * FROM `cart` WHERE costumer_email = '".$_SESSION['user']."' AND product_id = '".$id."'");
            if ($result2->num_rows > 0) {
                $check = TRUE;
            } else {
                $check = FALSE;
            }
        } else {
            $check = FALSE;
        }

        $result = $conn->query("SELECT * FROM products WHERE id = '$id'");
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="page-heading">
                    <div class="container">
                        <h2>'.$row['name'].'</h2>
                    </div>
                </div>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="'.$row['image'].'" class="w-100" title="'.$row['name'].'" alt="'.$row['name'].'">
                            </div>
                            <div class="col-md-6">
                                <div class="product-detail">
                                    <h5>'.$row['name'].'</h5>
                                    <p class="rate">₹ '.$row['price'].'/-</p>';
                                        if (!$check) {
                                            echo '<a href="add-to-cart.php?id='.$row['id'].'" class="btn"><i class="fa-solid fa-cart-plus"></i> &nbsp;Add to Cart</a>';
                                        } else {
                                            echo '<a href="cart.php" class="btn"><i class="fa-solid fa-cart-plus"></i> &nbsp;Go to Cart</a>';
                                        }
                                    ?>
                                    <?php
                                echo '</div>
                                <div class="product-details">
                                    <h2>Product Details</h2>
                                    '.$row['desc'].'
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
            }
        } else {
            echo "<p class='white'>0 items</p>";
        }
    ?>

    <?php include 'inc/why.php' ?>
    <?php include 'inc/footer.php' ?>
</body>

</html>

<script>
</script>