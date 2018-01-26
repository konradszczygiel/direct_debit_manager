<br/><br/>
<h1>wprowadz nazwe direct debit: </h1>
<br/><br/>

<if input type=submit value="Add new direct debit " />
{
<for ($n=0;$n<=1000;$n++)
<form action="index.php?action=add" method="post"  >
    <input type="text" name="nazwa_dd" />
    <br/><br/>
    <h2>wprowadz kwote: </h2>
    <input type="text" name="kwota_dd" />
    <br/><br/>
    <h3>wprowadz date: </h3>
    <input type="text" name="data_dd" />
    <br/><br/>
    <input type=submit value="Add new direct debit " />
}
    <else {input type=submit value="save and show all direct debits " />
        <echo 'Nr.'.$n. 'Nazwa: ' . $name . ' <br> Kwota:  ' . $amount . '<br> Data: '/> . $data;
}
  
