<?php
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    public function sort() {
        echo "Sorting an array";
    }
}

class LinkedListSorter implements Sortable {
    public function sort() {
        echo "Sorting a linked list";
    }
}

$arraySorter = new ArraySorter();
$arraySorter->sort(); 
echo "<br>";
$linkedListSorter = new LinkedListSorter();
$linkedListSorter->sort();
