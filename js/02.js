// 問題2
// ユーザマスタの1行を取得した連想配列 $in から、
// 連想配列のキーのみを抽出した配列を作成してください。

let data = {
  id:   1,
  code: 'S1001',
  name: '山田',
  pref: 27,
};

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

console.log(Object.keys(data));

/*
array (size=4)
  0 => string 'id' (length=2)
  1 => string 'code' (length=4)
  2 => string 'name' (length=4)
  3 => string 'pref' (length=4)
*/
