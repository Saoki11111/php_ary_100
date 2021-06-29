<?php

// $in1 は tbl テーブルの更新内容、
// $in2 は更新対象のIDです。
// これらを元にプレースホルダ付の UPDATE 文と、実行用パラメータを作成してください。

$in1 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];

$in2 = 99;

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

var_dump($out1, $out2);

/*
string 'UPDATE tbl SET a = :a, b = :b, c = :c, d = :d WHERE id = :id' (length=60)

array (size=5)
  ':a' => int 1
  ':b' => int 2
  ':c' => int 3
  ':d' => int 4
  ':id' => int 99
*/
