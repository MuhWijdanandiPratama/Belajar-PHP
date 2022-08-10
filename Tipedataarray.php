<?php

//array di php bersifat dinamis, yang artinya tidak hanya satu tipe data yang bisa dimasukkan kedalam satu buah array 
//melainkan bisa banyak tipe data yang dimasukkan ke dalam sebuah array
$nilai = array(10, 9, 8, "tujuh", 6.5);
var_dump($nilai);

$nama = ["Muhammad", "Wijdanandi", "Pratama"];
var_dump($nama);

echo $nama[0];
echo "\n";
//untuk mengambil data array pada suatu index

$nama[0] = "Dani";
var_dump($nama);
echo "\n";
//untuk mengubah data array pada suatu index

unset($nama[1]);
var_dump($nama);
//untuk menghapus data array pada suatu index

$nama[] = "Mvvp";
var_dump($nama);
//digunakan untuk menambahkan data array pada index terakhir

var_dump(count($nama));
//digunakan untuk menghitung jumlah data yang ada pada suatu array

$data = array(
    "id" => 220303,
    "nama" => "Mvvp",
    "pass" => "Mvvp0107"
);
//membuat array tetapi dengan mengganti key dengan string

var_dump($data["pass"]);
echo "\n";

$person = [
    "id" => 220404,
    "nama" => "qlnsdyd",
    "pass" => "qlnsdyd04"
];

var_dump($person);
echo "\n";

$andi = [
    "id" => 66227,
    "nama" => "Harper",
    "pass" => "AndiHarper",
    "alamat" => [
        "kota" => "Ngantru",
        "negara" => "Indonesia"
    ]
];
//nested array

var_dump($andi["alamat"]["kota"]);
//untuk memanggil data nested array

?>