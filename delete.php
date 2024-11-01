<?php 

$index = $_GET['index'];

$data = file_get_contents('data.json');
$data = json_decode($data,true);


unset($data[$index]);
$data = json_encode(array_values($data));
file_put_contents('data.json', $data);
header('location: index.php');

?>