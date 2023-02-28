<?php
$kata = strtolower(readline("Masukkan angka palindrom: "));


$kata_balik = strrev($kata);
if ($kata == $kata_balik) {
  echo "$kata angka ini adalah palindrom.";
//masukan kata yang palindrom contoh (121,131,757 dst)

} else {
  echo "$kata  angka ini bukan palindrom.";
    //masukan kata yang tidak palindrom contoh (1515,1514,12,10 dst)
}
?>