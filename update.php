<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Acess-Control-Allow-Headers, Authorization, X-Requested-With");


$data =json_decode(file_get_contents("php://input"));
$con =mysqli_connect("localhost", "makerspace", "laverne2024");
mysqli_select_db($con, "makerspace_grads");
//data 



$result = mysqli_query($con,"SELECT * FROM graduates");
$to_encode = array();
while($row =mysqli_fetch_assoc($result)){
                $to_encode[]=$row;
}


echo json_encode($to_encode);







