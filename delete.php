<?php 

require_once __DIR__.'/conn.php';

header("content-type:application/json");
header("Access-Control-Allow-Methods:DELETE");

$data = json_decode(file_get_contents("php://input"));


$sql = "DELETE from tblapi where id = '{$data->id}'";

$res = mysqli_query($db->getConnection(),$sql);

if ($res) {
    $response = array(
        "code"=>200,
        "message"=>"data Deletd successfully",
        "error"=>false

    );

    echo json_encode($response,JSON_PRETTY_PRINT);
}else {
    $response = array(
        "code"=>200,
        "message"=>"data not deletd successfully",
        "error"=>false

    );

    echo json_encode($response,JSON_PRETTY_PRINT);
}





?>