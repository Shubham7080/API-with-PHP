<?php 

require_once __DIR__.'/conn.php';

header("Content-type:application/json");
header("Access-control-Allow-Methods:PUT");
header("Access-control-Allow-Origin:*");

 
$data = json_decode(file_get_contents("php://input"));

$sql = "UPDATE `Dbphp`.`tblapi` SET `stname`='{$data->stname}',
`rollno`='{$data->rollno}',`email`='{$data->email}',`college`='{$data->college}' WHERE  `id`=$data->id;";


$res = mysqli_query($db->getConnection(),$sql);


if ($res) {
    $response = array(
        "code"=>200,
        "message"=>"data Updated successfully",
        "error"=>false

    );

    echo json_encode($response,JSON_PRETTY_PRINT);
}else {
    $response = array(
        "code"=>200,
        "message"=>"data not Updated successfully",
        "error"=>false

    );

    echo json_encode($response,JSON_PRETTY_PRINT);
}



?>