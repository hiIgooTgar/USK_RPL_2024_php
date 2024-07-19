<?php
include "./connect.php";

$count = "SELECT * FROM visitors";
$query = mysqli_query($connect, $count);

while ($item_visitors = mysqli_fetch_assoc($query)) {
    $data_1 = $item_visitors['count_users'];
    $data_2 = $data_1 + 1;
    $addVisitors = "UPDATE visitors SET count_users='$data_2'";
    $process = mysqli_query($connect, $addVisitors);
}
