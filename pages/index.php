<?php

// pobieranie danych z json

$json_data = file_get_contents('data.txt');

$directDebits = json_decode($json_data, $assoc = true);


foreach ($directDebits as $directDebit)
{

    $name =   $directDebit['name'];
    $amount = $directDebit['amount'];
    $data =   $directDebit['data']
    // tu dopisze  i data

    ?>

    <p>
        Name: <b><?php echo $name ?></b>  Amount: <b><?php echo $amount ?> </b> Data: <b><?php echo $data ?></b>
    </p>

    <?php



}


?>