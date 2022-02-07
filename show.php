<?php 


require_once __DIR__.'/conn.php';

header("Content-type: application/json");
header("Access-Control-Allow-Methods:GET");
header("Access-Control-Allow-Origin:*");



$sql = "SELECT * FROM tblapi";

$res = mysqli_query($db->getConnection(),$sql);


if (mysqli_num_rows($res)==0) {
    echo json_encode(array("code"=>201,"message"=>"data not found"));
 
}
else
{   $output = mysqli_fetch_all($res,MYSQLI_ASSOC);
echo json_encode($output,JSON_PRETTY_PRINT);
    
}

?>