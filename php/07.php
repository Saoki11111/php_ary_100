<?php
// 配列 $in は自然数または null を含む配列です。
// この配列から null を取り除いてください。
// 加工後の配列は、連番の添字配列となるようにしてください。

$in = [1, 2, null, 4, null, 6, 7];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = array_values(array_filter($in));

var_dump($out);

/*
array (size=5)
  0 => int 1
  1 => int 2
  2 => int 4
  3 => int 6
  4 => int 7
*/

// ↓ 回答例
// $out = array_values(array_filter($in));
// あってた
// array_filter は 要素ごと削除(keyも) なので 解と合わないため
// array_values で 取り出した結果を array で key を振り直して返した
// https://hkou.hatenablog.com/entry/2015/01/21/094919
