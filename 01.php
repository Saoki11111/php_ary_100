<?php
$in = [

    [
        'id' => 1,
        'code' => 'S1001',
        'name' => '山田',
    ],
    [
        'id' => 2,
        'code' => 'S1003',
        'name' => '鈴木',
    ],
    [
        'id' => 3,
        'code' => 'S1002',
        'name' => '佐藤',
    ],
];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = [];

foreach ($in as $i ) {
  array_push($out, $i['name']); 
}

var_dump($out);

/*
array (size=3)
  0 => string '山田' (length=6)
  1 => string '鈴木' (length=6)
  2 => string '佐藤' (length=6)
*/

//
// 回答例
// $out = array_column($in, 'name');
// 対象のカラムを見つけることができるのか、、
