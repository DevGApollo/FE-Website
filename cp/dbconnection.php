<?php
error_reporting(0);
define('DB_SERVER', '204.11.58.166:3306');
define('DB_USER', 'apollkx7_dcb');
define('DB_PASS', 'Apollo#4872!C');
define('DB_NAME', 'apollkx7_dcbindia');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
