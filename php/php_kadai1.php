<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_kadai1</title>
</head>
<body>

<h1>式と演算子課題（１）</h1>
<h3>(1)2つの文字列を比較し、同じ文字列かどうか、知らせる文を表示するプログラムを作ろう。
最低限、if文と、PHPに標準で備わっているstrcasecmp関数をネットで調べて、かつ使用する事。</h3>


<?php
    $str1 = 'オレンジ';
    $str2 = 'オレンジ';

    $result = strcasecmp($str1, $str2);
    if($result === 0){
        echo '同じ文字列です';
    }else{
        echo '同じ文字列ではありません';
    }
?>


<br>
<h3>(2)２つ以上の文字列を連結して表示するプログラムを作ろう。</h3>

<?php
    echo '日本語' . 'こんにちは';

?>


<br>
<h3>(3)文字列と数値を結合して表示するプログラムを作ろう。</h3>

<?php
    $year = 2022;
    echo '今年は' . $year;
?>

<br>
<h3>(4)定数を使って文字列作成し表示するプログラムを２つ作ろう。
ただし、定数の構文は２種類あるので、１種類ずつ使う事。</h3>

<?php
define("AISATSU", "Hello");
echo AISATSU;
?>

<?php 
const NAME = "お名前";
echo NAME;
?>


<br>
<h3>(5)PHPに標準で備わっている定数を使用して、行番号とファイル名を表示するプログラムを作ろう。
PHPに標準で備わっている定数には、どんなものがあるか、自分で調べてみよう。</h3>

<?php
    print_r(__FILE__ . 'ファイル内の' . __LINE__ . '行目');
?>


<br>
<h3>(6)３００の数値を変数に設定して、３６５の数値で割った答えを表示するプログラムを作ろう。</h3>

<?php
$number = 300;
$result = $number / 365;
echo $result;
?>

<br>
<h3>(7)好きな数値を入れた変数を用意して、後置加算演算子を使い、加算後の結果を表示するプログラムを作ろう。</h3>

<?php
$x = 12;
$x++;
echo $x;
?>

<br>
<h3>(8)好きな数値を入れた変数を用意して、後置減算演算子を使い、減算後の結果を表示するプログラムを作ろう。</h3>

<?php
$x = 10;
$x--;
echo $x;
?>

<br>
<h3>(9)前置演算子と後置演算子を組み合わせて使用し、その結果を表示するプログラムを作り、前置と後置の違いを体感しよう。</h3>

<?php
$x = 12;
echo $x . "<br>";
$y = ++$x;
echo "前置演算の結果は$y";
echo "<br>";
$a = 12;
echo $a . "<br>";
$b = $a++;
echo "後置演算の結果は$b";
?>


<br>
<h3>(10)３と２の数値を設定した変数を用意して、その変数を足し算した値を表示するプログラムを作ろう。</h3>

<?php
$x=3;
$y=2;
echo $x + $y;
?>

<br>
<h3>(11)「1234」の数値を、文字列の値に変換して表示するプログラムを作ろう。
その際に、現在の値の型まで表示してくれる関数var_dump()を使おう。</h3>

<?php
$n = 1234;
var_dump($n);
echo '<br>';
$s = (string)$n;
var_dump($s);
?>

<br>
<h3>(12)以下のソースの間違えを考え、修正し、正しい結果を表示するプログラムに変えよう。
3 = $locations;
2 + $locations = $c;
print($c);</h3>

<?php
$locations = 3;
$c = $locations + 2;
print($c);
?>

    
</body>
</html>