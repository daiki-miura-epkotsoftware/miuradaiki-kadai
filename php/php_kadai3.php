<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_kadai3</title>
</head>
<body>

<h1>制御文課題</h1>
<h3>(1)
複数条件のチェック
表示する度に、ランダムで、if elseif elseのどれかの処理が行われるプログラムを作ろう。
PHPに標準で備わっているrand()関数をネットで調べよう。</h3>


<?php
   $number = rand(0,100);
   echo $number . '<br>';
   if($number === 0){
        echo "0です";
    }elseif($number % 2 === 0){
        echo "偶数です";
    }else{
        echo "奇数です";
    }
?>


<br>
<h3>(2)
三項演算子を使用して、表示する度にランダムで表示するメッセージが変わるプログラムを作ろう。</h3>

<?php
    $num = rand(1, 50);
    echo "くじの番号は{$num}です<br>";
    $result = $num % 9 == 0 ? '当たり' : 'ハズレ';
    echo $result;
?>


<br>
<h3>(3)「1～4」の数値をランダムに変数へ保存し、その変数がどの値であるか、switch文でチェックし表示するプログラムを作ろう。</h3>

<?php
    $a = rand(1, 4);
    switch ($a) {
        case 1:
            echo "変数aの値は1に等しい";
            break;
        case 2:
            echo "変数aの値は2に等しい";
            break;
        case 3:
            echo "変数aの値は3に等しい";
            break;
        case 4:
            echo "変数aの値は4に等しい";
            break;
    }
?>

<br>
<h3>(4)問題(3)で作ったプログラムをコピーし、break文を抜いたら、処理はどうなるか。
予測した後、コピーしたプログラムを修正して検証しよう。</h3>

<?php
    $a = rand(1, 4);
    switch ($a) {
        case 1:
            echo "変数aの値は1に等しい";
            
        case 2:
            echo "変数aの値は2に等しい";
            
        case 3:
            echo "変数aの値は3に等しい";
            
        case 4:
            echo "変数aの値は4に等しい";
            
    }
?>
<br>変数aが1のとき、全ての条件が実行される。
変数aが2のとき、2と3と4の場合の条件が実行される。
変数aが3のとき、3と4の場合の条件が実行される。
変数aが4のとき、4の場合の条件が実行される。<br>
このことから、break文を抜くと一致した条件から下のプログラムが実行されることがわかる。

<br>
<h3>(5)
問題(3)で作ったプログラムをコピーし、「1～6」の数値をランダムに変数へ保存するよう変更。
default文を使用して「1～4」以外の数値の時は、エラーを示すような文章を表示するプログラムを作ろう。</h3>

<?php
    $a = rand(1, 6);
    switch ($a) {
        case 1:
            echo "変数aの値は1に等しい";
            break;
        case 2:
            echo "変数aの値は2に等しい";
            break;
        case 3:
            echo "変数aの値は3に等しい";
            break;
        case 4:
            echo "変数aの値は4に等しい";
            break;
        default:
            echo "エラー";
    }
?>


<br>
<h3>(6)
問題(3)で作ったプログラムをコピーし、endswitch文を使用した、switch文に修正しよう。</h3>

<?php
    $a = rand(1, 4);
    switch ($a) :
        case 1:
            echo "変数aの値は1に等しい";
            break;
        case 2:
            echo "変数aの値は2に等しい";
            break;
        case 3:
            echo "変数aの値は3に等しい";
            break;
        case 4:
            echo "変数aの値は4に等しい";
            break;
    endswitch;
?>

<br>
<h3>(7)
whileループで、10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。</h3>

<?php
    $i = 1;
    $sum = 0;
    while($i <= 10){
        echo "ループ数:$i<br>";
        $i++;
    }
    
?>

<br>
<h3>(8)
do～whileで10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。</h3>

<?php
    $i = 1;
    do{
        echo "ループ数:$i<br>";
        $i++;
    } while($i <= 10);
    
?>

<br>
<h3>(9)
下記のソースにbreak文を加えて「ゼロで割り算する事」を避けるプログラムを作ろう。

for ($counter = -3; $counter < 10; $counter++) {
  echo 100 / $counter;
}
</h3>

<?php
for ($counter = -3; $counter < 10; $counter++) {
    if($counter == 0){
        break;
    }
    echo 100 / $counter;
  }
?>


<br>
<h3>(10)問題(9)で作ったプログラムをコピーし、break文の代わりにcontinue文を使用するとどうなるか。
予測した後、プログラムを書いて検証しよう。</h3>

$counter=0のときの処理をスキップして$counter=-3から$counter=9までfor文を実行する。<br><br>

<?php
for ($counter = -3; $counter < 10; $counter++) {
    if($counter == 0){
        continue;
    }
    echo 100 / $counter . '<br>';
  }
?>


</body>
</html>