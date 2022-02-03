<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_kadai5</title>
</head>
<body>
    
<h1>関数課題１</h1>
<h3>第一引数と第二引数の値で、足し算、引き算、掛け算、割り算、剰余のそれぞれ計算を行って、結果を返す各関数作成し、呼び出そう。
ただし、関数は別のphpファイルに書き、呼び出す時は、includeで関数定義を読み込もう。また、各関数名は処理に合った名前を付ける事。
また、関数内の処理で、計算結果は、第一引数に上書き保存し、その第一引数を結果として返すようにしよう。
</h3>

<?php
include('php_kadai5_function.php');

$x = rand(1,100);
$y = rand(1,10);

$result_calc_1 = add($x, $y);
echo "$x + $y = $result_calc_1<br>";

$result_calc_2 = subtraction($x, $y);
echo "$x - $y = $result_calc_2<br>";

$result_calc_3 = multipl($x, $y);
echo "$x * $y = $result_calc_3<br>";

$result_calc_4 = devision($x, $y);
echo "$x / $y = $result_calc_4<br>";

$result_calc_5 = surplus($x, $y);
echo "$x % $y = $result_calc_5<br>";

?>


<h1>関数課題２</h1>
<h3>関数課題１の関数をコピーして、引数を参照渡しにした関数を作り、呼び出そう。
作った参照渡しの各関数を呼び出す時は、常に第一引数を変数aに。第二引数を変数bにしよう。
その上で、事前に変数aとbには、好きな数値を入れて、その値がどうなるか予測しながら、実際の値をプログラムを書いて、検証しよう。
</h3>

<?php
$a = 15;
$b = 4;
echo 'a=' . $a . ' , ' . 'b=' . $b . '<br>';

$result_calc_6 = add_cpy($a, $b);
echo "a + b = $result_calc_6<br>";

$result_calc_7 = subtraction_cpy($a, $b);
echo "a - b = $result_calc_7<br>";

$result_calc_8 = multipl_cpy($a, $b);
echo "a * b = $result_calc_8<br>";

$result_calc_9 = devision($a, $b);
echo "a / b = $result_calc_9<br>";

$result_calc_10 = surplus($a, $b);
echo "a % b = $result_calc_10<br>";
?>

<p>予測では引数を参照渡しにしても呼び出し元の変数の値は変化しない、だったが
    結果としては変数aの値が前の呼び出した関数によって上書きされてしまっている。
    関数内の処理で第一引数に計算結果を上書きして返り値としているためと思われる。
    そのため、以降の処理において引数aに初期宣言の値ではない値が呼び出した関数へ渡されている。
    a=15,b=4のときa%b=3と予想していた結果が0と意図しないものになった。
</p>


</body>
</html>