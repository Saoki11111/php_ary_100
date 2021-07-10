# $in はテーブル tbl に追加したいデータであり、
# カラム名 => 値 の連想配列となっています。
# この配列からINSERT文を生成してください。

hash = {
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
};


# //////////////////////////////////
# //       SOME CODE HERE         //
# //////////////////////////////////

keys = hash.keys.join(', ')
values = hash.values.join(', ')

pp "INSERT INTO tbl (#{keys}) VALUES (#{values})"

# /*
# string 'INSERT INTO tbl(a, b, c, d) VALUES(1, 2, 3, 4)' (length=46)
# */
