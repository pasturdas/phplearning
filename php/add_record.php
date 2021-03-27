<?php
include 'connect.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTINS');
header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
$data=json_decode(file_get_contents("php://input"));
$id= mysqli_real_escape_string($connection, $data->id);
$name= mysqli_real_escape_string($connection, $data->name);
$address= mysqli_real_escape_string($connection, $data->address);
$branch= mysqli_real_escape_string($connection, $data->branch);

$sql = "insert into students(id,name,address,branch) values('".$id."','".$name."','".$address."','".$branch."')";
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if($res)
{
    echo "Success";
}
else
{
    echo "Error";
}
mysqli_close($connection);