<?php

    $bilangan = readline("Masukkan yang anda mau masukan: ");
   if ($bilangan > 0) {


    echo "hasil $bilangan  ini adalah bilangan positif.";
    //jika anda ingin menunjukan hasil yang positif maka masukan seperti ini contoh (200)
} elseif ($bilangan == 0) {


    echo "hasil $bilangan dari adalah nol.";
    //jika anda ingin menunjukan hasil yang negatif maka masukan seperti ini contoh (-100)
} else {

    
    echo "hasil $bilangan  ini adalah bilangan negatif.";
}
?>