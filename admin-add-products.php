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
            <h2>Add Products</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form enctype="multipart/form-data">
                            <h3>Add Products</h3>
                            <div class="row justify-center">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Product Name" required="" name="name">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Price" required="" name="price">
                                </div>
                                <div class="col-md-12">
                                    <input type="file" required="" name="image">
                                </div>
                                <div class="col-md-12">
                                    <select name="catagory" required>
                                        <option selected disabled>-- Select Product Catagory</option>
                                        <?php
                                        include 'connection.php';
                                        $result = $conn->query("SELECT id, catagory_name FROM catagories");
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo '<option value="'.$row['id'].'">'.$row['catagory_name'].'</option>';
                                            }
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="desc" required placeholder="Product Description"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn w-100">Add Product</button>
                                </div>
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
    var form = document.querySelector("form");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        var xmlhttp = new XMLHttpRequest();
        var url = "add-p.php";
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "multipart/form-data");
        var checkBoxes_formData = new FormData(form);
        xmlhttp.send(checkBoxes_formData);

        xmlhttp.onreadystatechange = () => {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                console.log(checkBoxes_formData);
                console.log(xmlhttp.responseText);
            }
        }
    })
</script>