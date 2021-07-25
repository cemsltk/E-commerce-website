<?php

session_start();

require_once('CreateDb.php');
require_once('component.php');

// create instance of Createdb class


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Product Page</title>

    <style>
        .container {
            margin-top: 100px;
        }

        .newarrival {
            background: green;
            width: 50px;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .col-md-7 h2 {
            color: #555;
        }

        .stars {
            height: 15px;
        }

        .price {
            color: #FE980F;
            font-size: 26px;
            font-weight: bold;
            padding-top: 20px;
        }

        input {
            border: 1px solid #ccc;
            font-weight: bold;
            height: 33px;
            text-align: center;
            width: 30px;
        }

        .cart {
            background: #fe980f;
            color: #fff;
            font-size: 15px;
            margin-left: 20px;
        }
    </style>

</head>


<body>
    <?php
    require_once('signedInHeader.php');
    ?>

    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="product1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="product2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="product3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <hr>

                </div>
            </div>

            <div class="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2><?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "e-commerce";

                    $database = new CreateDb("cart", "producttb");
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT product_name FROM producttb";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $productname = $row["product_name"];
                            echo $row["product_name"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?></h2>
                <p>TCD-2500</p>
                <img src="stars.png" class="stars">
                <p class="price">1800 ₺</p>
                <p><?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "e-commerce";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT detail FROM product";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo $row["detail"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?></p>
                <p><b>Availability:</b> IN STOCK</p>
                <p><b>Condition:</b> NEW</p>
                <p><b>Brand:</b> LENCO</p>
                <label>Quantity:</label>
                <input type="text" value="1">

                <button type="submit" class="btn btn-default cart" name="add" onclick="<?php
                                                                                        $servername = "localhost";
                                                                                        $username = "root";
                                                                                        $password = "";
                                                                                        $dbname = "e-commerce";

                                                                                        // Create connection
                                                                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                        // Check connection
                                                                                        if ($conn->connect_error) {
                                                                                            die("Connection failed: " . $conn->connect_error);
                                                                                        }

                                                                                        $sql = "SELECT id FROM producttb";
                                                                                        $result = $conn->query($sql);

                                                                                        if ($result->num_rows > 0) {
                                                                                            // output data of each row
                                                                                            while ($row = $result->fetch_assoc()) {
                                                                                                
                                                                                                component($row['id']);
                                                                                                //$count=1;
                                                                                            }
                                                                                        } else {
                                                                                            echo "0 results";
                                                                                        }
                                                                                        $conn->close();
                                                                                        

                                                                                        if (isset($_POST['add'])) {

                                                                                            if (isset($_SESSION['producttb'])) {

                                                                                                $item_array_id = array_column($_SESSION['producttb'], "product_id");

                                                                                                if (in_array($_POST['product_id'], $item_array_id)) {
                                                                                                    echo "<script>alert('Product is already added in the cart..!')</script>";
                                                                                                    echo "<script>window.location = 'productPage.php'</script>";
                                                                                                } else {

                                                                                                    $count = count($_SESSION['producttb']);
                                                                                                    $item_array = array(
                                                                                                        'product_id' => $_POST['product_id']

                                                                                                    );

                                                                                                    $_SESSION['producttb'][$count] = $item_array;
                                                                                                }
                                                                                            } else {

                                                                                                $item_array = array(
                                                                                                    'product_id' => $_POST['product_id']
                                                                                                );

                                                                                                // Create new session variable
                                                                                                $_SESSION['producttb'][0] = $item_array;
                                                                                            }
                                                                                        }
                                                                                        

                                                                                        ?>"></button>

            </div>
        </div>
        <hr>
        <div class="col-md-10" style="margin-left: 10%;">
            <h2>Product Features:</h2>
            <p style="text-align: center;">
            Key features • Retro wooden gramophone • Good sound quality • Speed - 33, 45 and 78 RPM (rpm) • Two integrated speakers • USB output • CD player and radio • Remote control This unique Lenco TCD-2500 combines today's technology with the past. It is a combined design. It has the ability to play records with 33, 45 or 78 rpm. USB output allows connecting to your computer and other electronics. You can also play with the lid closed, as your records fit in the closed cabinet. It has a remote control to use your device more easily. Dimensions: 490 × 340 × 250 mm, Weight: 9.2 kg Output: 2 x 4.5 watts (RMS)</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>