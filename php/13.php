<?php

// スネークケースをパスカルケースに変換してください。

$in = 'this_is_an_apple';

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

// $out = explode('_', $in);
//  [0]=> string(4) "this"
//  [1]=> string(2) "is"
//  [2]=> string(2) "an"
//  [3]=> string(5) "apple"

// $out = ucfirst($in); 
// -> string(16) "This_is_an_apple"

// _ で分割して 先頭 大文字にして join 

$out = join('', array_map('ucfirst', explode('_', $in)));
var_dump($out);

/*
string 'ThisIsAnApple' (length=13)
*/
