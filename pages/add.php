<?php


if ( isset($_POST['name']) ){

	// pobieramy dane z pliki, to jest json
	$saved_json_data = file_get_contents('data.txt');

	// zamienamy json na tablice
	$saved_data = json_decode($saved_json_data, $asoc = true);

	if (empty($saved_data)) {
		$saved_data = [];
	}

	$_POST['id'] = uniqid("dd");

	// dane od użytkownika
	$data = [$_POST];

	// w new_data łączymy, dane zapisane z danymi użykownika, to jest tablica
	$new_data = array_merge($saved_data, $data);

	// zamieniamy wszyktie dane( tablica ) na json
	$json_data = json_encode($new_data);

	// zapsisujemy połączone dane to pliku
	$status = file_put_contents('data.txt',$json_data);

	if ( $status !== false ) {

		header('location: index.php');

	} else {
		die("coś się nie udało");
	}
}

?>


<form method="POST" action="index.php?action=add">

	<table class="table">
		<tr>
			<td>Name</td>
			<td><input name="name" type="text"></td>
        </tr>
		<tr>
			<td>Amount</td>
			<td><input name="amount" type="text"></td>
		</tr>
		<tr>
		<td>With day of each month you make paymant</td>
		<td><input name="date" type="text"> </td>
		
		</tr>
		<tr></tr>
		<tr>
			<td><input type="submit" value="Add"> </td>
			<td></td>
		</tr>
	</table>

</form>