<?php

class ArrayManipulation
{
    public $list;
    public $sorted_data;
    public $arrayLists;

    function __construct($list)
    {
        $this->list = $list;
        $this->sorted_data = $list;
        rsort($this->sorted_data);
    }

    public function create_lists($group_count)
    {
        $arrayLists = [];
        for ($list = 0; $list < $group_count; $list++) {
            array_push($arrayLists, array());
        }
        return $this->arrayLists = $arrayLists;
    }

    protected function smallest_array()
    {
        $lowestSum = array_sum($this->arrayLists[0]);
        $lowestArrayKey = 0;
        for ($i = 1; $i < count($this->arrayLists); $i++) {
            $sum = array_sum($this->arrayLists[$i]);
            if ($sum  < $lowestSum) {
                $lowestSum = $sum;
                $lowestArrayKey = $i;
            }
        }
        return $lowestArrayKey;
    }
    public function get_groups()
    {
        for ($i = 0; $i < count($this->sorted_data); $i++) {
            array_push($this->arrayLists[$this->smallest_array()], $this->sorted_data[$i]);
        }
        return $this->arrayLists;
    }
}
