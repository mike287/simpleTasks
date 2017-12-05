<?php

// napisz formularz przekazujacy wartość

if (isset($_GET['tekst']))
{

    $tekst = htmlspecialchars($_GET['tekst']);
    echo "Wpisana wartość to <b>$tekst</b><br />";
    echo '<a href="4.01.php">Powrót do formularza</a>';
}
    else
        {
        echo '<form action="4.01.php" method="get">';
        echo '<div><input type="text" name="tekst" required />';
        echo '<input type="submit" value="Wyślij" />';
        echo '</div></form>';
}
