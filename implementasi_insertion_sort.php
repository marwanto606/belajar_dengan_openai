<?php
//Untuk mengimplementasikan Insertion Sort pada PHP, Anda dapat menggunakan kode berikut:
function insertionSort($arr) {
  // Perulangan untuk mencari elemen yang akan diurutkan
  for ($i = 0; $i < count($arr); $i++) {
    $val = $arr[$i];
    $j = $i - 1;
    // Perulangan untuk menemukan posisi elemen yang tepat
    while ($j >= 0 && $arr[$j] > $val) {
      $arr[$j + 1] = $arr[$j];
      $j--;
    }
    // Menempatkan elemen pada posisi yang tepat
    $arr[$j + 1] = $val;
  }
  return $arr;
}

// Contoh penggunaan
$arr = array(5, 2, 7, 1, 3);
$arr = insertionSort($arr);
print_r($arr);

/*
Di atas adalah implementasi dasar dari Insertion Sort pada PHP.
Function insertionSort() menerima sebuah array sebagai parameter, dan mengembalikan array yang telah diurutkan dengan menggunakan Insertion Sort. 
Dalam function ini, kita pertama-tama mencari elemen yang akan diurutkan, dan mencari posisi yang tepat untuk elemen tersebut di dalam array. 
Kemudian, elemen tersebut ditempatkan pada posisi tersebut, dan proses ini diulang hingga semua elemen telah diurutkan.

Contoh penggunaan dari function ini dapat dilihat pada baris terakhir kode di atas, 
di mana kita memanggil function insertionSort() dengan menggunakan array [5, 2, 7, 1, 3] sebagai parameter, dan menampilkan hasilnya dengan menggunakan print_r(). 
Setelah function ini dijalankan, hasilnya adalah array yang telah diurutkan, yaitu [1, 2, 3, 5, 7].
*/
