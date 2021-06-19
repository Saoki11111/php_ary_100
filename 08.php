<?php

// $in は文字列型の数字が入った配列です。
// 中身を全て整数型にしてください。

$in = ['1', '2', '3', '4', '5'];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = array_map('intval', $in);

var_dump($out);

/*
array (size=5)
  0 => int 1
  1 => int 2
  2 => int 3
  3 => int 4
  4 => int 5
*/

// 回答例
// $out = array_map('intval', $in);
// あってた
// https://loop-never-ends.com/php-array-map/ 公式にはやりかたなかった
