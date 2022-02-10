<?php
// ２．寿司以外の好きな食べ物のレストランデータを、一度に20件取得し、表示する。
$key = '';

$response = file_get_contents("http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key={$key}&name=ラーメン
&count=20&format=json");

$arr = json_decode($response, true);

$restaurants = $arr['results']['shop'];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホットペッパーAPI</title>
</head>
<body>
    <h3>ホットペッパーのラーメン屋情報！</h3>
    <table border="1">
        <tr>
            <th>店舗名</th>
            <th>営業時間</th>
            <th>定休日</th>
            <th>平均ディナー予算</th>
            <th>住所</th>
            <th>最寄駅名</th>
            <th>交通アクセス</th>
            <th>駐車場</th>
            <th>総席数</th>
            <th>カード可</th>
        </tr>
        <?php for($i = 0; $i < (int)$arr['results']['results_returned']; $i++): ?>
            <tr>
                <td><a href="<?php echo $restaurants[$i]['urls']['pc']; ?>"><?php echo $restaurants[$i]['name']; ?></a></td>
                <td><?php echo $restaurants[$i]['open']; ?></td>
                <td><?php echo $restaurants[$i]['close']; ?></td>
                <td><?php echo $restaurants[$i]['budget']['average']; ?></td>
                <td><?php echo $restaurants[$i]['address']; ?></td>
                <td><?php echo $restaurants[$i]['station_name']; ?></td>
                <td><?php echo $restaurants[$i]['access']; ?></td>
                <td><?php echo $restaurants[$i]['parking']; ?></td>
                <td><?php echo $restaurants[$i]['capacity']; ?></td>
                <td><?php echo $restaurants[$i]['card']; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>


<?php
// 取得データをforeach文で全て表示する(ネストが深い...)
foreach($restaurants as $key1 => $rest):
    if(is_array($rest)){
        foreach($rest as $key2 => $values):
            if(!is_array($values)){
                echo $key2 . '：' . $values . '<br>';
            }else{
                foreach($values as $key3 => $value):
                    if(!is_array($value)){
                    echo $key3 . '：' . $value . '<br>';
                    }else{
                    foreach ($value as $key4 => $num):
                        echo $key4 . '：' . $num . '<br>';
                    endforeach;
                    }
                endforeach;
            }
        endforeach;    
    }else{
        echo $key1 . '：' . $rest . '<br>';
    }
endforeach;
