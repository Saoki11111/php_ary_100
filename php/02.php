<?php
$in = [
    'id' => 1,
    'code' => 'S1001',
    'name' => '山田',
    'pref' => 27,
];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

$out = array_keys($in);


var_dump($out);

/*
array (size=4)
  0 => string 'id' (length=2)
  1 => string 'code' (length=4)
  2 => string 'name' (length=4)
  3 => string 'pref' (length=4)
*/

// 回答例
// $out = array_keys($in);
// あってた
