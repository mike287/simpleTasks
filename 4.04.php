<?php

//Utwórz program, który po podaniu odpowiedniej nazwy użytkownika i jego hasła
//wyświetli tajną informację, jeżeli zaś wpisane dane będą nieprawidłowe — infor-
//mację o błędzie. Dane o użytkownikach i hasłach zapamiętaj jawnie w tablicy asocja-
//    cyjnej.

$passwords = ['admin' => 'adminpassword', 'root' =>
'rootpassword'];

$flag = TRUE;
$flagSecret = NULL;

echo "<form action='4.04.php' method='post'>";
echo "<div><input type='text' name='user' placeholder='name' required></div>";
echo "<div><input type='password' name='password' placeholder='password' required></div>";
echo "<div><input type='submit'></div>";

if(isset($_POST['user']) && isset($_POST['password']))
{
    foreach ($passwords as $key => $value) {

        if ($key == $_POST['user'] && $value == $_POST['password']) {

            echo "<b>TAJNY NAPIS UJAWNIONY</b>" . "<br>";
            $flagSecret = TRUE;
            break;

        }
        else
        {
            $flag = NULL;
        }
    }

        if ($flag == NULL)
        {
            echo "złe dane - podaj nowe";
            header("Refresh:5");
        }
}

    if($flagSecret == TRUE) {
        header("Refresh:5");
    }


















//if (isSet($_POST['uzytkownik']) && isSet($_POST['haslo']))
//    ́{ // wartości w formularzu są wpisane
//    if (array_key_exists($_POST['uzytkownik'], $hasla) &&
//        ($hasla[$_POST['uzytkownik']] == $_POST['haslo'])) {
//        print ("Tajna informacja to: <b>2*2=4</b>");
//    } else {
//        print ("Wpisano niepoprawne dane o użytkowniku i haśle.<br />");
//        print ('<a href="4-04.php">Wróć</a> i spróbuj ponownie.');
//    }
//} else { // nie ma wpisanych danych, wyświetlasz formularz
//    print '<form action="4-04.php" method="post">';
//    print '<div><table><tr><td>użytkownik: </td><td><input type=
// ́"text" ';
//    print "name=\"uzytkownik\" value=\"\" /></td></tr>";
//    print '<tr><td>haslo: </td><td><input type="password" ';
//    print 'name="haslo" /></td></tr></table>';
//    print '<input type="submit" value="Wyślij" />';
//    print '</div></form>';
//}











