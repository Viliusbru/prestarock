<?php

$data = [1, 2, 4, 7, 1, 6, 2, 8];
$sorted_array = sort_list($data);
$total_sum = get_total($sorted_array);
$required_sum = get_required_sum($total_sum, 3);


function sort_list($list)
{
    $sorted_data = [];
    rsort($list);
    foreach ($list as $item) {
        $sorted_data[] += $item;
    }
    return $sorted_data;
}
function get_total($list)
{
    $total_sum = 0;
    foreach ($list as $item) {
        $total_sum += $item;
    }
    return $total_sum;
};

function get_required_sum($total, $num_of_groups)
{
    return round($total / $num_of_groups);
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
