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
    <title>My Account</title>
</head>

<body>
    <?php
    require_once('signedInHeader.php');
    ?>

    <div class="row">
        <div class=" col-md-4 offset-md-4 my-4">
            <form>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <h1>
                                    <span class="fa fa-user mt-3"></span>
                                </h1>
                            </div>
                            <div class="col-md-9">
                                <h3>My Account</h3>
                                <small>You can see your account information here.</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <p>Username</p>
                            <input readonly class="form-control" value="<?php
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
                                                                                if (isset($_SESSION['username'])) {
                                                                                    echo $_SESSION['username'];
                                                                                    break;
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo "0 results";
                                                                        }
                                                                        $conn->close();
                                                                        ?>"></input>
                        </div>
                        <hr>
                        <div class="form-group">
                            <p>E-mail</p>
                            <input readonly class="form-control" value="<?php
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

                                                                        $sql = "SELECT email_1,username FROM users";
                                                                        $result = $conn->query($sql);

                                                                        if ($result->num_rows > 0) {
                                                                            // output data of each row
                                                                            while ($row = $result->fetch_assoc()) {

                                                                                if (isset($_SESSION['username'])) {
                                                                                    echo $row['email_1'];
                                                                                    break;
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo "0 results";
                                                                        }
                                                                        $conn->close();
                                                                        ?>"></input>
                        </div>
                        <hr>
                        <div class="form-group">
                            <p>Phone Number</p>
                            <input readonly class="form-control" value="<?php
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

                                                                        $sql = "SELECT mobilephone,username FROM users";
                                                                        $result = $conn->query($sql);

                                                                        if ($result->num_rows > 0) {
                                                                            // output data of each row
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                if (isset($_SESSION['username'])) {
                                                                                    echo $row['mobilephone'];
                                                                                    break;
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo "0 results";
                                                                        }
                                                                        $conn->close();
                                                                        ?>"></input>
                        </div>
                        <hr>
                    </div>
            </form>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>