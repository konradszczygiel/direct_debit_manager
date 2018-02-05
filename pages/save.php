<?php


if( isset($_POST['id'])) {

	$userData = $_POST;

	$id = $_POST['id'];

	// pobieramy dane z plikijson
	$saved_json_data = file_get_contents('data.txt');

	// zamienamy json na tablice
	$saved_data = json_decode($saved_json_data, $asoc = true);

	foreach ($saved_data as  $key  => $data) {
		if ( $data['id'] == $id ) {
			$saved_data[$key] = $userData;
		}
	}

	// zamieniamy wszyktie dane( tablica ) na json
	$json_data = json_encode($saved_data);

	// zapsisujemy połączone dane to pliku
	$status = file_put_contents('data.txt',$json_data);

	// powinienem przejsc do indec.php
	if ( $status !== false )
	{

		header('location: index.php');

	}
	else {
		die("coś się nie udało");
	}

}
?>