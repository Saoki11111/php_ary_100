# $in はユーザマスタから取得した2次元配列です。
# 誕生日を YYYY年M月D日 表記に変更してください。

array = [
    {
        'id' => 1,
        'name' => '山田',
        'birthday' => '1980-01-01',
    },
    {
        'id' => 2,
        'name' => '鈴木',
        'birthday' => '1985-02-14',
    },
    {
        'id' => 3,
        'name' => '佐藤',
        'birthday' => '1990-12-31',
    },
];

# //////////////////////////////////
# //       SOME CODE HERE         //
# //////////////////////////////////

d = Date.new(2017,9,7)
pp d

# /Users/s_aoki/workspace/php_ary_100/ruby/10.rb:26:in `<main>': uninitialized constant Date (NameError)
# Did you mean?  Data

# array.each do |row|
#   pp Date.new(row['birthday']).strtime("%Y%m%d")
# end

# /*
# array (size=3)
#   0 => 
#     array (size=3)
#       'id' => int 1
#       'name' => string '山田' (length=6)
#       'birthday' => string '1980年1月1日' (length=15)
#   1 => 
#     array (size=3)
#       'id' => int 2
#       'name' => string '鈴木' (length=6)
#       'birthday' => string '1985年2月14日' (length=16)
#   2 => 
#     array (size=3)
#       'id' => int 3
#       'name' => string '佐藤' (length=6)
#       'birthday' => string '1990年12月31日' (length=17)
# */
