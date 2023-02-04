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
            <h2>All Products</h2>
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
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            if(isset($_SESSION['user'])){
                                include 'connection.php';
                                $result = $conn->query("SELECT * FROM products ORDER BY id DESC");
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                            <td><a href="product.php?id='.$row['id'].'"><img src="'.$row['image'].'" title="'.$row['name'].'" alt="'.$row['name'].'"></a></td>
                                            <td><a href="product.php?id='.$row['id'].'" class="link">'.$row['name'].'</a></td>
                                            <td width="10%">₹ '.$row['price'].'/-</td>
                                            <td width="15%">
                                                <a href="edit-product.php?id='.$row['id'].'" class="btn"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                            </td>
                                            <td>
                                                <a class="remove" href="delete-product.php?id='.$row['id'].'"><i class="fa-solid fa-xmark"></i></a>
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