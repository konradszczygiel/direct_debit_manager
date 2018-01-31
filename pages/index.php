<?php

// pobieranie danych z json

$json_data = file_get_contents('data.txt');

$directDebits = json_decode($json_data, $assoc = true);



foreach ($directDebits as $directDebit)
{


    $name =   $directDebit['name'];
    $amount = $directDebit['amount'];
    $data =   $directDebit['date'];
    $id =     $directDebit['id'];
    // tu dopisze  i data

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
        Id: <b><?php echo $id ?></b> Name: <b><?php echo $name ?></b>  Amount: <b><?php echo $amount ?> </b> Data: <b><?php echo $data . "-" . $f ?></b>
        <a href="index.php?action=edit&id=<?php echo $id ?> ">Edycja</a>
        <a href="index.php?action=delete&id=<?php echo $id ?> ">Usun</a>
    </p>

    <?php



}


?>