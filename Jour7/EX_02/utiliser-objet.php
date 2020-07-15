<?php 
$date1 = new DateTime();
echo '<p>'.$date1->format('Y-m-d H:i:s').'</p>';

$date2 = new DateTime();
echo '<p>'.$date2->format('2020-06-22').'</p>';

$date2 = $date1->diff (new DateTime('2020-06-22'));
echo $date2->d.'jours <br>';
echo $date2->h.'heures <br>';
echo $date2->i.'minutes depuis le début de la piscine.<br>';
?>