# $in はユーザマスタから取得した2次元配列です。
# レコードに含まれる pref の値を全て重複なく抽出して、配列にしてください。
# また、作成した配列は、添字配列（連番キー）となるようにしてください。

profiles = [
    {
        'id' => 1,
        'name' => '山田',
        'pref' => 27,
    },
    {
        'id' => 2,
        'name' => '鈴木',
        'pref' => 26,
    },
    {
        'id' => 3,
        'name' => '佐藤',
        'pref' => 13,
    },
    {
        'id' => 4,
        'name' => '小林',
        'pref' => 27,
    },
    {
        'id' => 5,
        'name' => '伊藤',
        'pref' => 13,
    },
]

# 1//////////////////////////////////
# 1//       SOME CODE HERE         //
# 1//////////////////////////////////

out = []
profiles.map {|profile| out.push(profile['pref'])}
pp out.uniq.sort.reverse

# /*
# array (size=3)
#   0 => int 27
#   1 => int 26
#   2 => int 13
# */
