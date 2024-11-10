<?php
$connection = new mysqli("localhost", "root", "", "ecommerce_1");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_1";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS ecommerce_1";
if (mysqli_query($con, $sql)) {
} else {
    echo "Error creating database: " . mysqli_error($con);
}

?>
