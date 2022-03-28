<?php
include 'classes/class.php';
$data = [1, 2, 4, 7, 1, 6, 2, 8];


$obj = new ListClass($data);
$obj->create_lists(3);
$obj->group_items();
print_r($obj);
