<?php

// program wyliczajacy obwód i pole

?>

<form action="" method="POST">
        <input type="number" name="bokA" placeholder="bok A" required><br>
        <input type="number" name="bokB" placeholder="bok B" required><br>
    <input type="submit" value="oblicz">
</form>

<?php

if(@$_POST['bokA'] != '' AND @$_POST['bokB'] != '')
{


if( isset($_POST['bokA'])  AND ($_POST['bokB']) )
{
    echo "bok A = ".$_POST['bokA']."<br>";
    echo "bok B = ".$_POST['bokB']."<br>";
    echo "obwód = ".($_POST['bokA']*2+$_POST['bokB']*2)."<br>";
    echo "pole = ".($_POST['bokA']*$_POST['bokB']);
}
else
{
    echo "nie podano boków";
}

}






?>

