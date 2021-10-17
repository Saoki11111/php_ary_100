# $in は、ユーザマスタから取得した2次元配列です。
# ユーザコードをキー、名前を値とする連想配列に加工してください。

In = [
    {
        'id' => 1,
        'code' => 'S1001',
        'name' => '山田',
    },
    {
        'id' => 2,
        'code' => 'S1003',
        'name' => '鈴木',
    },
    {
        'id' => 3,
        'code' => 'S1002',
        'name' => '佐藤',
    },
];

# //////////////////////////////////
# //       SOME CODE HERE         //
# //////////////////////////////////

code = []
names = []
out = {}

In.each do |i|
  code.push(i['code'])
  names.push(i['name'])
  # out = Hash[*([code, names].transpose.sort.flatten)]
  out = Hash[*([code, names].transpose.sort.flatten)]
end

p out

# hash sort (keyで)
# https://qiita.com/mnishiguchi/items/9095ac989ed7d51fe395

# transpose 行列入れ替え
# https://www.javadrive.jp/ruby/array_class/index15.html

# flatten 平坦に
# https://docs.ruby-lang.org/ja/latest/method/Array/i/flatten.html

# /*
# array (size=3)
#   'S1001' => string '山田' (length=6)
#   'S1002' => string '鈴木' (length=6)
#   'S1003' => string '佐藤' (length=6)
# */
