<?php

// $in1 はユーザマスタから取得した2次元配列です。
// 名前が $in2 であるレコードの、ユーザコードを取得してください。

$in1 = [
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

$in2 = '鈴木';


//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$index = array_search($in2, array_column($in1, 'name')); 
var_dump($index); // int 1 がなに？
$out = $in1[$index]['code'] ?? null; // なぜだ。。

var_dump($out);

/*
string 'S1003' (length=5)
*/
