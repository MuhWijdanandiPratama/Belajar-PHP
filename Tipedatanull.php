<?php

$nama = "Dani";
$nama = null;

$umur = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

echo "Is Nama = Null? : ";
echo is_null($nama);
//digunakan untuk mengecek apakah value dari suatu variable itu null atau tidak
//is_null digunakan dalam kondisi sudah yakin jika variable tersebut ada

$contoh = "Dani";
unset($contoh);
//unset digunakan untuk menghapus suatu variable yang sudah dideklarasikan
//atau bisa juga jika kita sudah tidak ingin menggunakan lagi suatu variable tersebut daripada menghapus secara manual
//lebih baik menggunakan unset
//simplenya unset digunakan untuk menghilangkan suatu variable

echo $contoh;

var_dump (isset($contoh));
//isset digunakan untuk mengecek apakah suatu variable itu ada atau tidak dan juga valuenya null atau tidak
//isset juga lebih aman digunakan dibandingkan is_null
//isset digunakan dalam kondisi belum yakin apakah variable tersebut ada atau tidak

?>