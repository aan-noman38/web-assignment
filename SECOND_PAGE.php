<?php

echo " Second Page <br>";
echo $_GET['first_name'];
echo "<br>";
echo $_GET['last_name'];
echo "<br>";
$val1=$_GET['value_1'];
$val2=$_GET['value_2'];
// echo $_GET['value_1']+$_GET['value_2'];

echo $val1 + $val2;
?>

<br> <a href="/PHP_BEGINER/FIRST_FORM.php"> Go to First Page </a>