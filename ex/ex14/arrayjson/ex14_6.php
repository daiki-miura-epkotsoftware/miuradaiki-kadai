<?php
// ６．その他にも色々なレストランデータを取得し、店舗画像集を作ってみるなど、学びながら遊んでみよう！
$key = '';

$response = file_get_contents("http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key={$key}&name=イタリア
&address=東京都&count=50&lunch=1&format=json");

$arr = json_decode($response, true);

$restaurants = $arr['results']['shop'];

echo $arr['results']['results_returned'] . '件ヒットしました。' . '<br>';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホットペッパーAPI 東京都のイタリア料理店</title>
</head>
<body>
    <h3>ホットペッパー東京イタリアン★ランチあり</h3>
    <table border="1">
        <tr>
            <th>店舗名</th>
            <th>ロゴ画像</th>
            <th>写真</th>
            <th>交通アクセス</th>
            <th>お店紹介</th>
        </tr>
        <?php for($i = 0; $i < (int)$arr['results']['results_returned']; $i++): ?>
            <tr>
                <td><a href="<?php echo $restaurants[$i]['urls']['pc']; ?>"><?php echo $restaurants[$i]['name']; ?></a></td>
                <td><img src="<?php echo $restaurants[$i]['logo_image']; ?>"></td>
                <td><img src="<?php echo $restaurants[$i]['photo']['pc']['l']; ?>"></td>
                <td><?php echo $restaurants[$i]['access']; ?></td>
                <td><?php echo $restaurants[$i]['catch']; ?></td>

            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
