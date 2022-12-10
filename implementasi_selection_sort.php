<?php
//Untuk mengimplementasikan Selection Sort pada PHP, Anda dapat menggunakan kode berikut:
function selectionSort($arr) {
  // Perulangan untuk mencari elemen terkecil di dalam array
  for ($i = 0; $i < count($arr) - 1; $i++) {
    $min = $i;
    for ($j = $i + 1; $j < count($arr); $j++) {
      if ($arr[$j] < $arr[$min]) {
        $min = $j;
      }
    }
    // Tukar elemen terkecil dengan elemen yang sedang diperiksa
    $temp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $temp;
  }
  return $arr;
}

// Contoh penggunaan
$arr = array(5, 2, 7, 1, 3);
$arr = selectionSort($arr);
print_r($arr);

/*
Di atas adalah implementasi dasar dari Selection Sort pada PHP.
Function selectionSort() menerima sebuah array sebagai parameter, dan mengembalikan array yang telah diurutkan dengan menggunakan Selection Sort.
Dalam function ini, kita pertama-tama mencari elemen terkecil di dalam array, dan menukarnya dengan elemen yang sedang diperiksa.
Kemudian, proses ini diulang hingga semua elemen telah diurutkan.

Contoh penggunaan dari function ini dapat dilihat pada baris terakhir kode di atas, 
di mana kita memanggil function selectionSort() dengan menggunakan array [5, 2, 7, 1, 3] sebagai parameter, dan menampilkan hasilnya dengan menggunakan print_r(). 
Setelah function ini dijalankan, hasilnya adalah array yang telah diurutkan, yaitu [1, 2, 3, 5, 7].
*/
