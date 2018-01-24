<?php

$name = isset($_POST["nazwa_dd"]) ? $_POST['nazwa_dd'] : '';
$amount = isset($_POST["kwota_dd"]) ? $_POST['kwota_dd'] : '';
$data = isset($_POST["data_dd"]) ? $_POST['data_dd'] : '';


echo 'Nazwa: ' . $name . ' <br> Kwota:  ' . $amount . '<br> Data: ' . $data;
