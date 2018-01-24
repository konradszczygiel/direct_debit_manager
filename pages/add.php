<?php

if ( isset($_POST['nazwa_dd'])) {
	$name = $_POST['nazwa_dd'];
} else {
	// pusto
	$name = '';
}


if ( isset($_POST['kwota_dd'])) {
	$amount = $_POST['kwota_dd'];
} else {
	// pusto
	$amount = '';
}

if ( isset($_POST['data_dd'])) {
	$data = $_POST['data_dd'];
} else {
	// pusto
	$data = '';
}


echo 'Nazwa: ' . $name . ' <br> Kwota:  ' . $amount . '<br> Data: ' . $data;
