<?php
include 'dbconnection.php';

$filename = "cat_inquiry.csv";
$fp = fopen('php://output', 'w');

$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='apollkx7_dcbindia' AND TABLE_NAME='catalouge_inquiry'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_row($result)) {
    $header[] = $row[0];
}

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=' . $filename);
fputcsv($fp, $header);

$query = "SELECT * FROM catalouge_inquiry";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_row($result)) {
    fputcsv($fp, $row);
}
exit;
?>
