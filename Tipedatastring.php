<?php

echo 'Nama : ';
echo 'Muhammad Wijdanandi Pratama';
echo "\n";

echo "Name : ";
echo "Muhammad\t Wijdanandi\t Pratama\n";

echo <<<dani
Selamat belajar PHP
sekarang, kita belajar menggunakan tipe data string
ini adalah cara ke-3 membuat string
ini disebut dengan heredoc

dani;

echo <<<'dani'
Selamat belajar PHP
sekarang, kita belajar menggunakan tipe data string
ini adalah cara ke-4 membuat string
ini disebut dengan nowdoc
dani;

?>