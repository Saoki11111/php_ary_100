# ユーザマスタから取得した2次元配列 $in から、
# 名前だけを取り出した配列を作ってください。


In = [
    {
        id:  1,
        code:  'S1001',
        name:  '山田',
    },
    {
        id:  2,
        code: 'S1003',
        name: '鈴木',
    },
    {
      id: 3,
        code: 'S1002',
        name: '佐藤',
    },
]

# //////////////////////////////////
# //       SOME CODE HERE         //
# //////////////////////////////////

out = []
In.each do |i|
  out.push(i[:name])
end

pp out

# /*
# array (size=3)
#   0 => string '山田' (length=6)
#   1 => string '鈴木' (length=6)
#   2 => string '佐藤' (length=6)
# */
#
# 2次元 hash のとき 大文字必須？
# 参照: https://blog.codecamp.jp/beginner-ruby-application
# こっちもやっていきたい: https://qiita.com/yamamoto_hiroya/items/08ee8d7bf5deafeebf75
