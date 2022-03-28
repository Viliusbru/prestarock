<?php
include 'classes/class.php';
$data = [1, 2, 4, 7, 1, 6, 2, 8];


$obj = new ListClass($data);
$obj->create_lists(3);
$obj->group_items();
// print_r($obj);
foreach ($obj->arrayLists as $item) {
    echo '<pre>';
    print_r($item);
    echo array_sum($item);
    echo '</pre>';
}
