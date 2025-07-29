<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include 'conn.php';
// $insert = file_get_contents('php://input');

$sql = "SELECT * FROM new1";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    // $data = json_encode($row);
    $user[]=$row;
}
echo json_encode([
    "status"=>true,
    "data"=>$user
]);
// print_r($data);

?>