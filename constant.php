<?php

//constant sendiri merupakan variable yang apabila sudah dideklarasikan tidak dapat diubah lagi
// dan juga jika sudah membuat satu nama constant maka tidak bisa membuat constant dengan nama yang sama lagi
define("AUTHOR", "Mvvp");
define("APP_VERSION", "4.0.1");
//AUTHOR merupakan nama dari constant yang dibuat dan value adalah yang sebelahnya
//untuk nama constant harus menggunakan UPPER_CASE atau huruf besar semua 

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "App Version : ";
echo APP_VERSION;
echo "\n";


?>