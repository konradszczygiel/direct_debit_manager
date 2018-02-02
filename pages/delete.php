<?php


<$json_data = file_get_contents('data.txt')>;

$directDebits = json_decode($json_data, $assoc = true);


$id_dd = $_GET['id'];
foreach ($directDebits as $directDebit)
print_r($id);
die;


?>