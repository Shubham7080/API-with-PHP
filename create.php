<?php 
require_once __DIR__.'/conn.php';

header("Content-type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
$data  = json_decode(file_get_contents("php://input"));

$query = "INSERT INTO tblapi (stname,rollno,email,college) 
VALUES('$data->stname','$data->rollno','$data->email','$data->college')";


$res = mysqli_query($db->getConnection(),$query);

if($res){
    $response = array(
        "code"=>200,
        "message"=>"data inserted successfully",
        "error"=>false

    );

    echo json_encode($response,JSON_PRETTY_PRINT);
}
else{
$response = array(
    "code"=>201,
    "message"=>"data not inserted successfully",
    "error"=>true

);
}
echo json_encode($response,JSON_PRETTY_PRINT);
?>