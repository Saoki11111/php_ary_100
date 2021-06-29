<?php
// $in1 はユーザコードの配列、
// $in2 は名前の配列です。
// ユーザコードをキー、名前を値とした連想配列を作成してください。

$in1 = ['S1001', 'S1002', 'S1003'];

$in2 = ['山田', '鈴木', '佐藤'];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = array_combine($in1, $in2);

var_dump($out);

/*
array (size=3)
  'S1001' => string '山田' (length=6)
  'S1002' => string '鈴木' (length=6)
  'S1003' => string '佐藤' (length=6)
*/

// 回答↓
// $out = array_combine($in1, $in2);
// あってた
// array_combine は key, value で 配列化、array_merge は 一つの配列にする
