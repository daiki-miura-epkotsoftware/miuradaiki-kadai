<?php
// ５．動画同様、寿司のレストランデータを取得。平均予算が低い順に10件のデータを表示する。
$key = '';

$response = file_get_contents("http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key={$key}&name=寿司&count=30&format=json");

$arr = json_decode($response, true);

$restaurants = $arr['results']['shop'];

// 'budget' > 'name'で昇順でソートする
$budgets = [];

foreach($restaurants as $key1 => $rest):
    if(is_array($rest)){
        foreach($rest as $key2 => $values):
            if($key2 === 'budget'){
                foreach($values as $item => $value):
                    if($item === 'name'){
                        $budgets[] = $value;
                    }
                endforeach;
            }
        endforeach;
    }
endforeach;



// 昇順に配列をソートする
sort($budgets);

// var_dump($budgets);

foreach($budgets as $price){
    echo '平均予算は ' . $price . '<br>';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホットペッパーAPI</title>
</head>
<body>
    <h3>ホットペッパーの寿司屋情報30選</h3>
    <table border="1">
        <tr>
            <th>店舗名</th>
            <th>平均予算</th>
            
        </tr>
        <?php for($i = 0; $i < (int)$arr['results']['results_returned']; $i++): ?>
            <tr>
                <td><a href="<?php echo $restaurants[$i]['urls']['pc']; ?>"><?php echo $restaurants[$i]['name']; ?></a></td>
                <td><?php echo $budgets[$i]; ?></td>

            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>