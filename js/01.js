// 問題1
// ユーザマスタから取得した2次元配列 $in から、
// 名前だけを取り出した配列を作ってください。

let items = [
    {
        id: 1,
        code: 'S1001',
        name: '山田',
    },
    {
        id: 2,
        code: 'S1003',
        name: '鈴木',
    },
    {
        id: 3,
        code: 'S1002',
        name: '佐藤',
    },
];

//////////////////////////////////
//       SOME CODE HERE         //
//////////////////////////////////

let out = [];
for(key in items){
  out.push((items[key].name));
}

console.log(out);

/*
array (size=3)
  0 => string '山田' (length=6)
  1 => string '鈴木' (length=6)
  2 => string '佐藤' (length=6)
*/
