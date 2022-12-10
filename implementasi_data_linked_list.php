<?php
//Berikut ini adalah contoh implementasi data linked list di PHP:
class Node {
  public $data;
  public $next;

  public function __construct($data) {
    $this->data = $data;
    $this->next = NULL;
  }
}

class LinkedList {
  public $first_node;
  public $last_node;
  public $count;

  public function __construct() {
    $this->first_node = NULL;
    $this->last_node = NULL;
    $this->count = 0;
  }

  public function add($data) {
    $new_node = new Node($data);

    if ($this->first_node === NULL) {
      $this->first_node = $new_node;
    } else {
      $this->last_node->next = $new_node;
    }

    $this->last_node = $new_node;
    $this->count++;
  }

  public function get($index) {
    $current_node = $this->first_node;
    $current_index = 0;

    while ($current_node !== NULL) {
      if ($current_index === $index) {
        return $current_node->data;
      }

      $current_node = $current_node->next;
      $current_index++;
    }

    return NULL;
  }

  public function remove($index) {
    $current_node = $this->first_node;
    $current_index = 0;
    $previous_node = NULL;

    while ($current_node !== NULL) {
      if ($current_index === $index) {
        if ($previous_node === NULL) {
          $this->first_node = $current_node->next;
        } else {
          $previous_node->next = $current_node->next;
        }

        $this->count--;
        break;
      }

      $previous_node = $current_node;
      $current_node = $current_node->next;
      $current_index++;
    }
  }
}

$list = new LinkedList();
$list->add(10);
$list->add(20);
$list->add(30);

echo $list->get(1);  // Outputs 20
$list->remove(1);
echo $list->get(1);  // Outputs 30
/*
Dalam kode di atas, kita membuat kelas Node yang merepresentasikan setiap elemen dalam linked list.
Kelas ini memiliki dua properti: $data yang berisi data yang disimpan dalam elemen, dan $next yang merujuk ke elemen berikutnya dalam linked list.
Kemudian, kita membuat kelas LinkedList yang merepresentasikan linked list itu sendiri. 
Kelas ini memiliki tiga properti: $first_node yang merujuk ke elemen pertama dalam linked list, $last_node yang merujuk ke elemen terakhir dalam linked list,
*/
