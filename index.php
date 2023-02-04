<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>SoftingArt</title>
</head>

<body>
    <?php include 'inc/header.php' ?>
    <video width="100%" title="SoftingArt" src="img/banner-home.mp4"></video>

    <section id="about">
        <h2 class="heading">
            About us
        </h2>
        <div class="container">
            <div class="row align-center">
                <div class="col-md-6">
                    <img src="img/about.png" class="w-100" title="SoftingArt" alt="SoftingArt">
                </div>
                <div class="col-md-6">
                    <div class="about">
                        <h2>Welcome to SoftingArt</h2>
                        <p>
                            SoftingArt is a company that specializes in providing high-quality computer parts and
                            accessories. Our product line includes a wide range of components, such as CPUs, GPUs,
                            motherboards, memory, storage devices, power supplies, and cooling solutions. We offer
                            products from top brands in the industry, ensuring that our customers receive the best
                            possible performance and reliability from their computers.
                        </p>
                        <p>
                            SoftingArt is also known for competitive prices and frequent sales and promotions.
                            We offer a price match guarantee, ensuring that customers always get the best deal
                            possible.
                        </p>
                        <p>
                            If you're looking to build or upgrade a computer, SoftingArt is an excellent choice. We
                            have a wide selection of high-quality parts at great prices, and our commitment to
                            customer service ensures that you'll have a positive experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <h2 class="heading">
            Products
        </h2>
        <div class="container">
            <div class="row">
                <?php
                    include 'connection.php';
                    $result = $conn->query("SELECT * FROM products ORDER BY id DESC");
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-3">
                                <div class="product">
                                    <img src="'.$row['image'].'" title="'.$row['name'].'"
                                        alt="'.$row['name'].'">
                                    <a href="product.php?id='.$row['id'].'" class="name">'.$row['name'].'</a>
                                    <span>₹ '.$row['price'].'/-</span>
                                    <a href="product.php?id='.$row['id'].'" class="product-link">View Product</a>
                                </div>
                            </div>';
                        }
                    } else {
                        echo "<tr>
                                <th><p class='white'>0 items</p></th>
                            </tr>";
                    }
                ?>
            </div>
        </div>
    </section>

    <?php include 'inc/why.php' ?>
    <?php include 'inc/footer.php' ?>
</body>

</html>