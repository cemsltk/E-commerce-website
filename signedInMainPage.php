<?php include('server.php') ?>
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
    <title>Main Page</title>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .carousel-item {
            height: 35rem;

            background: #777;
            color: #000;
            position: relative;
            background-position: center;
            background-size: cover;
        }

        .container {
            position: absolute;
            top: 10;
            left: 0;
            right: 0;
            padding-bottom: 10px;
        }

        .containerCarouselItem {
            position: absolute;
            bottom: 0;
            left: 160px;
            right: 0;
            padding-bottom: 40px;
        }

        .overlay-image {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: initial;
            background-size: center;
            opacity: 0.7;
        }
    </style>
</head>

<body>
<?php
    require_once('signedInHeader.php');
    ?>
    <hr>
    <div class="container" style="width: 1600px; height: 400px;">
        <div class="col-md-50">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; height:100%;">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="overlay-image" style="background-image: url(product1.jpg);"></div>
                        <div class="containerCarouselItem">
                            <h1>Lenco TCD-2500</h1>
                            <p>Lenco TCD-2500 Retro Pikap Lenco Tcd 2500</p>
                            <a href="productPage.php" class="btn btn-lg btn-primary">Go to Product Page</a>

                        </div>

                    </div>
                    <div class="carousel-item ">
                        <div class="overlay-image" style="background-image: url(product2.jpg);"></div>
                        <div class="containerCarouselItem">
                            <h1>Lenco TCD-2500</h1>
                            <p>Lenco TCD-2500 Retro Pikap Lenco Tcd 2500</p>
                            <a href="productPage.php" class="btn btn-lg btn-primary">Go to Product Page</a>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="overlay-image" style="background-image: url(product3.jpg);"></div>
                        <div class="containerCarouselItem">
                            <h1>Lenco TCD-2500</h1>
                            <p>Lenco TCD-2500 Retro Pikap Lenco Tcd 2500</p>
                            <a href="productPage.php" class="btn btn-lg btn-primary">Go to Product Page</a>

                        </div>

                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>