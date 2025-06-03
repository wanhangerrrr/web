<?php
function selamat($nama){
    return "Selamat datang $nama";
}

function user($as){
    return "Anda login sebagai $as";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User-Defined Function</title>
</head>
<body>
    <h1><?php echo selamat("Muhammad Hafiz Fassya"); ?></h1>
    <p><?php echo user("Admin"); ?></p>
</body>
</html>
