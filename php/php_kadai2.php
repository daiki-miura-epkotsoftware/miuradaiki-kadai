<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_kadai2</title>
</head>
<body>
    
<h1>式と演算子課題（２）</h1>
<h3>(1)以下の文の値を予測して、その後、プログラムを書き、検証しよう。
    
・2 + 4 - 5
4 - 5 + 2

・4 * 5 / 2
5 / 2 * 4
</h3>


<?php
    $a = 2;
    $b = 4;
    $c = 5;
    echo '2 + 4 - 5 =' . $a+$b-$c;
    echo '<br>';
    echo '4 - 5 + 2 =' . $b-$c+$a;
    echo '<br>';
    echo '4 * 5 / 2 =' . $b*$c/$a;
    echo '<br>';
    echo '5 / 2 * 4 =' . $c/$a*$b;
?>


<br>
<h3>(2)以下の文の値を予測して、その後、プログラムを書き、検証しよう。
2 * 3 + 4 + 1;
2 * (3 + 4 + 1);</h3>

<?php
    $a = 2;
    $b = 3;
    $c = 4;
    $d = 1;
    echo '2 * 3 + 4 + 1 =' . $a*$b+$c+$d;
    echo '<br>';
    echo '2 * (3 + 4 + 1) =' . $a*($b+$c+$d);
?>


<br>
<h3>(3)else文とif文について、以下のソースを見て、以下の質問に答えよ。
①trueが実行される条件を、画面上に表示しよう。
②falseが実行されるには、どのような処理が追加で必要か、解説を画面上に表示しよう。
if ($username == "Admin") {
  echo ("Welcome to the admin page.");
} else {
  echo ("Welcome to the user page.");
}
</h3>

①trueが実行される条件<br>
変数$usernameに格納されている文字列が文字列"Admin"と等しいとき
$username == "Admin"
<br>
<br>
②falseが実行されるには、どのような処理が追加で必要か<br>

1行目をif($username !== "Admin")とする。
<br>


<br>
<h3>(4)適当な配列を作り、複数の値を保存する事。また、保存した値を、ループ処理で順番に表示するプログラムを作ろう。</h3>

<?php
$fruits = ['apple', 'orange', 'banana', 'lemon', 'peach', 'grape'];
for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i] . '<br>';
}

?>


<br>
<h3>(5)問題(4)で作った配列の内容を、sort関数でアルファベット順に並べて、ループ処理で順番に表示するプログラムを作ろう。</h3>

<?php
sort($fruits);
foreach ($fruits as $name) {
    echo $name . '<br>';
}
?>


<br>
<h3>(6)適当な多次元配列を作成し、foreachで内容を順番に表示するプログラムと、whileで内容を順番に表示するプログラムを作ろう。
ただし、「マジックナンバー」の意味をネットで調べ、マジックナンバーを使わないこと。</h3>

<?php

$countries = [
   ['China', 'Korea', 'Japan'], 
   ['Germany', 'Italy', 'Spain'],
   ['Egypt', 'Nigeria', 'Ghana']
];

?>
<p>~foreachで表示~</p>
<?php
foreach ($countries as $country_group) {
    foreach ($country_group as $country) {
        echo $country . '<br>';
    }
}

?>

<p>~whileで表示~</p>
<?php
$i=0;
$j=0;

while($i < count($countries)){
    while($j < count($countries[$i])){
    echo $countries[$i][$j] . '<br>';
    $j++;
    }
$j=0;
$i++;
}
?>

</body>
</html>