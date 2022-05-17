<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP Dasar</h1>
<?php
echo "Hello World";
?>
<h2>Menggunakan Variabel</h2>
<?php
$nim  = "312010482";
$nama = "Firzi Cahya Priana";
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
</body>
</html>