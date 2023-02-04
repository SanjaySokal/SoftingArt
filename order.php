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
            <h2>Orders</h2>
        </div>
    </div>

    <section>
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
                <h2 class="order-heading">Order History</h2>
                <table>
                    <tbody>
                        <tr>
                            <th>Date</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Cancel</th>
                        </tr>
                        <?php
                            if(isset($_SESSION['user'])){
                                include 'connection.php';
                                $result = $conn->query("SELECT orders.id AS order_id, orders.email, orders.product_id, orders.delivered, orders.date, orders.cancel, products.id, products.name, products.image, products.price FROM orders INNER JOIN products ON orders.product_id = products.id WHERE orders.email = '".$_SESSION['user']."' && orders.delivered = '0' && orders.cancel = '0' ORDER BY orders.id DESC;");
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                            <td width="15%">'.date('d-m-Y', strtotime($row['date'])).'</td>
                                            <td><a href="product.php?id='.$row['product_id'].'"><img src="'.$row['image'].'" title="'.$row['name'].'" alt="'.$row['name'].'"></a></td>
                                            <td><a href="product.php?id='.$row['product_id'].'" class="link">'.$row['name'].'</a></td>
                                            <td width="10%">₹ '.$row['price'].'/-</td>
                                            <td width="15%"><a class="remove" href="cancel-order.php?id='.$row['order_id'].'">Cancel &nbsp;<i class="fa-solid fa-xmark"></i></a></td>
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

    <section>
        <div class="container">
            <div class="cart">
                <h2 class="order-heading">Order Delivered</h2>
                <table>
                    <tbody>
                        <tr>
                            <th>Date</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Details</th>
                        </tr>
                        <?php
                            $result = $conn->query("SELECT orders.id, orders.email, orders.product_id, orders.delivered, orders.date, orders.delever_date, orders.cancel, products.id, products.name, products.image, products.price FROM orders INNER JOIN products ON orders.product_id = products.id WHERE orders.email = '".$_SESSION['user']."' && orders.delivered = '1' ORDER BY orders.id DESC;");
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<tr>
                                        <td width="15%">'.date('d-m-Y', strtotime($row['delever_date'])).'</td>
                                        <td><a href="product.php?id='.$row['product_id'].'"><img src="'.$row['image'].'" title="'.$row['name'].'" alt="'.$row['name'].'"></a></td>
                                        <td><a href="product.php?id='.$row['product_id'].'" class="link">'.$row['name'].'</a></td>
                                        <td width="10%">₹ '.$row['price'].'/-</td>
                                        <td><a class="btn" href="contact.php">Get Details</a></td>
                                    </tr>';
                                }
                            } else {
                                echo "<tr>
                                        <th><p class='white'>0 items</p></th>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<section>
    <div class="container">
        <div class="cart">
            <h2 class="order-heading">Order Cancelled</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Date</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                    <?php
                        $result = $conn->query("SELECT orders.id, orders.email, orders.product_id, orders.cancel, orders.date, orders.delever_date, products.id, products.name, products.image, products.price FROM orders INNER JOIN products ON orders.product_id = products.id WHERE orders.email = '".$_SESSION['user']."' && orders.cancel = '1' ORDER BY orders.id DESC;");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<tr>
                                    <td width="15%">'.date('d-m-Y', strtotime($row['delever_date'])).'</td>
                                    <td><a href="product.php?id='.$row['product_id'].'"><img src="'.$row['image'].'" title="'.$row['name'].'" alt="'.$row['name'].'"></a></td>
                                    <td><a href="product.php?id='.$row['product_id'].'" class="link">'.$row['name'].'</a></td>
                                    <td width="10%">₹ '.$row['price'].'/-</td>
                                </tr>';
                            }
                        } else {
                            echo "<tr>
                                    <th><p class='white'>0 items</p></th>
                                </tr>";
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