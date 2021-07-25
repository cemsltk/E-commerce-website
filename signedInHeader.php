<header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="mainpage.php">Nostalji Plak</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="mainpage.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productPage.php">Product</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right" style="margin-right: 40px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-user mr-2"></span><?php
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

                                                                $sql = "SELECT username FROM users";
                                                                $result = $conn->query($sql);

                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        if (isset($_SESSION['username'])){
                                                                            echo $_SESSION['username'];
                                                                            break;
                                                                        }
                                                                        
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                $conn->close();
                                                                ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                        <a class="dropdown-item" href="myAccountPage.php">My Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="signedInMainPage.php?logout='1'"><?php if (isset($_GET['logout'])) {
                                                                                            session_destroy();
                                                                                            header("location: login.php");
                                                                                        } ?>
                            <span class="fa fa-sign-out"></span>Log Out</a>
                    </div>
                </li>
                <h5 class="px-3 cart">
                        <i class="fas fa-shopping-cart"></i> 
                        <a href="cartPage.php">Cart</a>
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
            </ul>
        </div>
    </nav>
</header>