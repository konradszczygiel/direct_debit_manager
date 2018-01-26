//Edit page.//
<?php

if ( isset($_POST['n'])) {
	$n = $_POST['n'];
} else {
	// pusto
	$n = '';


if ( isset($_POST['nazwa_dd'])) {
	$name.n. = $_POST['nazwa_dd'];
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


echo 'Nr.'.$n. 'Nazwa: ' . $name . ' <br> Kwota:  ' . $amount . '<br> Data: ' . $data;

<echo //wyswietlicz cala liste direct debit//
<h4> wprowadz numer direct debit ktory chcesz poprawic</h4>
<input type="number" name="n_dd" /> 

<echo 'Nr.'.$n. 'Nazwa: ' . $name . ' <br> Kwota:  ' . $amount . '<br> Data: ' . $data;>
<switch($n)>