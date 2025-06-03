<?php
$bil = -10;
echo abs($bil); 
echo "<br/>";

$bil = 19.1;
echo ceil($bil); 
echo "<br/>";

$bil = 19.5;
echo floor($bil); 
echo "<br/>";

$data = array(19, 23, 11, 45);
$max = max($data);
echo "Nilai max = ".$max; 
echo "<br/>";

$min = min($data);
echo "Nilai min = ".$min; 
echo "<br/>";

$random = mt_rand(4, 10); 
echo $random;
echo "<br/>";

$hasil = pow(4, -5); 
echo $hasil;
echo "<br/>";

echo round(10.23); 
echo "<br/>";

echo round(10.6);  
echo "<br/>";

echo round(-10.2);
echo "<br/>";
?>

