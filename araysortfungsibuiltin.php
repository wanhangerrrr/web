<?php
$npm = array("202310715190", "202310715190", "202310715190", "202310715190", "202310715190");
$nama = array("muhammad hafiz fassya", "muhammad hafiz fassya", "muhammad hafiz fassya", "muhammad hafiz fassya", "muhammad hafiz fassya");

array_multisort($npm, SORT_ASC, $nama); 

for ($i = 0; $i < count($npm); $i++) {
    echo $npm[$i] . " - " . $nama[$i] . "<br />";
}
?>
