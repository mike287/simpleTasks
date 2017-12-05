<?php

if($_POST['option'] == "")
{
    $_POST['option'] = "jednka nie wstaje z łóżka";
}
echo "plan na dziś "."<b>".$_POST['option']."</b>"."<br>";
echo "<a href='4.05.php'>wróć do formularza";