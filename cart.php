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
            <h2>Cart</h2>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="cart">
                <?php
                    if(isset($_GET['removed'])) {
                        $rem = $_GET['removed'];
                        if ($rem == "true") {
                            echo "<p class='removed'>Item removed Successfully</p>";
                        } else if ($rem == "false") {
                            echo "<p class='failed'>Failed to remove Item</p>";
                        }
                    }
                ?>
                <table>
                    <tbody>
                        <tr>
                            <th>Remove</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Buy Now</th>
                        </tr>
                        <?php
                            if(isset($_SESSION['user'])){
                                include 'connection.php';
                                $result = $conn->query("SELECT * FROM cart INNER JOIN products ON cart.product_id = products.id WHERE costumer_email = '".$_SESSION['user']."' ORDER BY number DESC");
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                            <td><a class="remove" href="remove-item.php?id='.$row['product_id'].'"><i class="fa-solid fa-xmark"></i></a></td>
                                            <td><a href="product.php?id='.$row['product_id'].'"><img src="'.$row['image'].'" title="'.$row['name'].'" alt="'.$row['name'].'"></a></td>
                                            <td><a href="product.php?id='.$row['product_id'].'" class="link">'.$row['name'].'</a></td>
                                            <td width="10%">₹ '.$row['price'].'/-</td>
                                            <td width="18%">
                                                <a href="buy.php?id='.$row['product_id'].'" class="btn">Buy Now</a>
                                            </td>
                                        </tr>';
                                    }
                                } else {
                                    echo "<tr>
                                            <th><p class='white'>0 items</p></th>
                                        </tr>";
                                }
                            } else {
                                header("location: login.php");
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php include 'inc/why.php' ?>
    <?php include 'inc/footer.php' ?>
</body>

</html>