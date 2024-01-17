<?php $rat = 0.24;
$y = $_POST['yen'];
$baht = $y * $rat;
echo "$y Yen = " . $baht . " Baht";
?>