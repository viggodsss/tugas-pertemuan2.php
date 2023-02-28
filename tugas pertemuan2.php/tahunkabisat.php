<?php
$tahun = readline("Masukkan tahun kabisat: ");


if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
  echo "$tahun  ini adalah tahun kabisat.";


} else {
  echo "$tahun  ini bukan tahun kabisat.";
}

 //tahun kabisat adalah tahun yang habis dibagi 4 dan tidak habis dibagi 100, kecuali tahun yang habis dibagi 400
?>