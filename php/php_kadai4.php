<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_kadai4</title>
</head>
<body>
    
<h1>配列課題</h1>
<h3>(1)arrayを使用して、平日の曜日の文字列だけの配列を作成し、表示するプログラムを作ろう
</h3>


<?php
    $weeks = array('月曜日', '火曜日', '水曜日', '木曜日', '金曜日');
    for($i=0; $i<count($weeks); $i++){
        $day = $weeks[$i];
        echo $day . '<br>';
    }
?>


<br>
<h3>(2)「"英語" => "日本語"」の形式として、色んな英単語の連想配列を作成し、表示するプログラムを作ろう
"Cat" => "猫"</h3>

<?php
    $words = [
        "soccer" => "サッカー",
        "basketball" => "バスケットボール",
        "baseball" => "野球",
        "tennis" => "テニス",
        "breakfast" => "朝食",
        "darts" => "ダーツ",
        "Strawberry" => "いちご",
        "giraffe" => "キリン",
        "Earth" => "地球"
    ];

    foreach ($words as $english => $japanese) {
        echo "英単語{$english}は日本語で{$japanese}です。<br>";
    }

?>


<br>
<h3>(3)問題(1)と(2)で作った配列から、それぞれ好きな値を選んで、表示するプログラムを作ろう
</h3>

<?php
$week_day = $weeks[4];
$action = $words['darts'];

echo $week_day . '<br>';
echo $action;
?>

<br>
<h3>(4)
問題(1)と(2)の配列の要素を数えて、表示するプログラムを作ろう</h3>

<?php
    $num1 = count($weeks);
    $num2 = count($words);
    echo "問題(1)の配列の要素数は{$num1}<br>";
    echo "問題(2)の配列の要素数は{$num2}<br>";
?>


<br>
<h3>(5)多次元の連想配列を作り、表示するプログラムを作ろう
ただし、「リテラル」や「マジックナンバー」の意味をネットで調べ、リテラルやマジックナンバーを使わないこと。</h3>

<?php
    define('FRUITS', 'フルーツ');
    define('PEACH', 'モモ');
    define('APPLE', 'リンゴ');
    define('GRAPE', 'ブドウ');
    define('PEAR', '梨');
    define('MELON', 'メロン');
    define('BREAD', 'パン');
    define('CREAM_BUN', 'クリームパン');
    define('CURRY_BREAD', 'カレーパン');
    define('ANPAN', 'あんぱん');
    define('FRIED_BREAD', '揚げパン');
    define('FRENCH_BREAD', 'フランスパン');
    define('DRINK', 'ドリンク');
    define('COLA', 'コーラ');
    define('TEA', 'お茶');
    define('COFFEE', 'コーヒー');
    define('WINE', 'ワイン');
    define('TAX', '税率');
    define('TAX_EATIN', 1.1);
    define('TAX_TAKEOUT', 1.08);
    define('COLON', '：');
    define('NEW_LINE', '<br>');


    $menu_list = [
        FRUITS => [PEACH, APPLE, GRAPE, PEAR, MELON],
        BREAD => [CREAM_BUN, CURRY_BREAD, ANPAN, FRIED_BREAD, FRENCH_BREAD],
        DRINK => [COLA, TEA, COFFEE, WINE],
        TAX => [TAX_EATIN, TAX_TAKEOUT]
    ];


    foreach ($menu_list as $type => $menu) {
        foreach($menu as $food_price){
            echo $type . COLON . $food_price . NEW_LINE;
        }
    }

?>


</body>
</html>