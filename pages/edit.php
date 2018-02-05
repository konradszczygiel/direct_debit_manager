<?php



// pobieramy dane z pliki, to jest json
$json_data = file_get_contents('data.txt');

$directDebits = json_decode($json_data, $assoc = true);

//ja to widze ze pobieram podane id
$id_dd = $_GET['id'];


foreach ($directDebits as $directDebit) {


    $name = $directDebit['name'];
	$amount = $directDebit['amount'];
	$data = $directDebit['date'];
	$id = $directDebit['id'];

	//jesli ID sa takie same to zapisuje je ponizej w zmiennych

	if ($id_dd == $id) {

		$n = $name;
		$a = $amount;
		$d = $data;
	}


}

?>


  
<form method="post" action="index.php?action=save">

<table class="table">
    <tr>
        <td>Name</td>
        <td>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input name="name" type="text" value="<?php echo $n; ?>">
        </td>
    </tr>
    </tr>
    <tr>
        <td>Amount</td>
        <td><input name="amount" type="text" value="<?php echo $a; ?>"></td>
    </tr>
    <tr>
    <td>With day of each month you make paymant</td>
    <td><input name="date" type="text" value="<?php echo $d; ?>"> </td>
        </tr>
    <tr></tr>
    <tr>
        <td><input type="submit" value="Save"> </td>
        <td></td>
    </tr>
</table>
