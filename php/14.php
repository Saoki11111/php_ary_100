<?php

// $in はユーザマスタから取得した2次元配列です。
// レコードに含まれる pref の値を全て重複なく抽出して、配列にしてください。
// また、作成した配列は、添字配列（連番キー）となるようにしてください。

$in = [
    [
        'id' => 1,
        'name' => '山田',
        'pref' => 27,
    ],
    [
        'id' => 2,
        'name' => '鈴木',
        'pref' => 26,
    ],
    [
        'id' => 3,
        'name' => '佐藤',
        'pref' => 13,
    ],
    [
        'id' => 4,
        'name' => '小林',
        'pref' => 27,
    ],
    [
        'id' => 5,
        'name' => '伊藤',
        'pref' => 13,
    ],
];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = array_unique(array_column($in, 'pref'));

var_dump($out);

/*
array (size=3)
  0 => int 27
  1 => int 26
  2 => int 13
*/

// 解答はあっていた
// $out = array_values(array_unique(array_column($in, 'pref')));
