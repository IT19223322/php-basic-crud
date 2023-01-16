<?php 
include "connect.php";

$sql = "SELECT * FROM `employee`";

$result = mysqli_query($con,$sql);

$json_array = array();

while($data = mysqli_fetch_assoc($result)){
    $json_array[] = $data;
}

echo json_encode($json_array);

?>