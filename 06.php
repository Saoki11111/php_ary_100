<?php
// 中身が全て $in1 で、要素数が $in2 個の配列を作ってください。

$in1 = 'x';
$in2 = 5;

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = array_fill(0, $in2, $in1);

var_dump($out);

/*
array (size=5)
  0 => string 'x' (length=1)
  1 => string 'x' (length=1)
  2 => string 'x' (length=1)
  3 => string 'x' (length=1)
  4 => string 'x' (length=1)
*/

// ↓ 回答例
// $out = array_fill(0, $in2, $in1);
// あってた
// https://www.php.net/manual/ja/function.array-fill.php
