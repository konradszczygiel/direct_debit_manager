<?php
   // pobieramy dane z pliki, to jest json
$json_data = file_get_contents('data.txt');

$directDebits = json_decode($json_data, $assoc = true);
//ja to widze ze pobieram uniqe id 
$id_dd = $_POST['id'];

foreach ($directDebits as $directDebit)
{


    $name =   $directDebit['name'];
    $amount = $directDebit['amount'];
    $data =   $directDebit['date'];
    $id =     $directDebit['id'];
//jesli ID sa takie same to zapisuje je ponizej w zmiennych
    if ($id_dd==$id)
    {
    $n=$name;
    $a=$amount;
    $d=$data;
    }
    else {
		die("coś się nie udało");
    }
    


//przypisuje kocowki liczbom
 if ($data==1)
    {
        $f="st";
    }
    else 
    {
        if ($data==2) 
        {
            $f="nd";
        }
        else 
        {
            if ($data==3) 
            {
                $f="rd";        
            }
            else 
            {
                $f="th";
            }

        }
    }

?>





    <p> 
    zmien bierzace dane
    Id: <b><?php echo $id_dd ?></b> Name: <b><?php echo $n ?></b>  Amount: <b><?php echo $a ?> </b> Data: <b><?php echo $d . "-" . $f ?></b>
    </p>
  
<form method="post" action="$n_data">

<table class="table">
    <tr>
        <td>Name</td>
        <td>C</td>
                </tr>
    <tr>
        <td>Amount</td>
        <td><input name="amount" type="text"></td>
    </tr>;
    <tr>;
    <td>With day of each month you make paymant</td>
    <td><input name="date" type="text"> </td>
        </tr>
    <tr></tr>
    <tr>
        <td><input type="submit" value="Save Edit"> </td>
        <td></td>
    </tr>
</table>
<?php
//aa
// pobieramy dane z plikijson
$saved_json_data = file_get_contents('data.txt');

// zamienamy json na tablice
$saved_data = json_decode($saved_json_data, $asoc = true);

//przypisuje to samo ID aby ja zapisac w tablicy
  $nn_data=$n_data,$id_dd;

// w new_data łączymy, dane zapisane z danymi użykownika i starym ID
$new_data = array_merge($saved_data, $nn_data,);

// zamieniamy wszyktie dane( tablica ) na json
$json_data = json_encode($new_data);

// zapsisujemy połączone dane to pliku
$status = file_put_contents('data.txt',$json_data);

// powinienem przejsc do indec.php
if ( $status !== false ) {

    header('location: index.php');

} else {
    die("coś się nie udało");
}


    ?>