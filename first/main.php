<?php
@require('vendor/autoload.php');

use dekor\ArrayToTextTable;

$data = array(
    array(
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
    ),
    array(
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
    ),
);

echo (new ArrayToTextTable($data))->render();
