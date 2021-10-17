# スネークケースをパスカルケースに変換してください。

text = 'this_is_an_apple'

# //////////////////////////////////
# //       SOME CODE HERE         //
# //////////////////////////////////

pp text.split('_').map{|t| t.capitalize}.join

# /*
# string 'ThisIsAnApple' (length=13)
# */
