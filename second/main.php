<?php

$data = [1, 2, 4, 7, 1, 6, 2, 8];
$sorted_array = sort_list($data);


function sort_list($list)
{
    $sorted_data = [];
    rsort($list);
    foreach ($list as $item) {
        $sorted_data[] += $item;
    }
    return $sorted_data;
}

function create_lists($group_count)
{
    $listArray = [];
    for ($list = 0; $list < $group_count; $list++) {
        array_push($listArray, array());
    }
    return $listArray;
}
function smallest_array($arrays)
{
    $lowestSum = array_sum($arrays[0]);
    $lowestArrayKey = 0;
    for ($i = 1; $i < count($arrays); $i++) {
        $sum = array_sum($arrays[$i]);
        if ($sum  < $lowestSum) {
            $lowestSum = $sum;
            $lowestArrayKey = $i;
        }
    }
    return $lowestArrayKey;
}

function group_items($group_count, $sorted_list)
{
    $arrays = create_lists($group_count);
    for ($i = 0; $i < count($sorted_list); $i++) {
        array_push($arrays[smallest_array($arrays)], $sorted_list[$i]);
    }
    return $arrays;
}
print_r(group_items(3, $sorted_array));
