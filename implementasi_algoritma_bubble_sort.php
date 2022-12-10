<?php
//Berikut ini adalah contoh implementasi algoritma bubble sort menggunakan PHP:
function bubble_sort($arr) {
  for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
      if ($arr[$j] > $arr[$j + 1]) {
        $temp = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $temp;
      }
    }
  }

  return $arr;
}

$arr = [5, 3, 8, 2, 9, 1];
$sorted_arr = bubble_sort($arr);
print_r($sorted_arr);  // Outputs [1, 2, 3, 5, 8, 9]

/*
Dalam kode di atas, kita membuat fungsi bubble_sort yang menerima sebuah array yang akan diurutkan. 
Fungsi tersebut kemudian akan mengurutkan array tersebut menggunakan algoritma bubble sort. 
Pertama, fungsi akan mengelilingi array menggunakan loop for pertama, dan kemudian akan membandingkan setiap elemen dengan elemen berikutnya menggunakan loop for kedua.
Jika elemen saat ini lebih besar dari elemen berikutnya, maka elemen tersebut akan ditukar tempatnya.
Setelah seluruh elemen dibandingkan dan ditukar tempat jika perlu, array akan terurut dari yang terkecil hingga yang terbesar.
Kemudian, array yang telah terurut akan dikembalikan oleh fungsi.
*/
