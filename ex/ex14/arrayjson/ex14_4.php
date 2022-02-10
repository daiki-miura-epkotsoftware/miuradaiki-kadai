<?php
// ４．３の課題だけだと、よくわからないクーポンが並ぶので、店名も添えて表示するようにする。
$key = '';

$response = file_get_contents("http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key={$key}&address=千葉県
&count=100&format=json");

$arr = json_decode($response, true);

// var_dump($arr);

$restaurants = $arr['results']['shop'];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホットペッパーAPI 千葉県クーポン</title>
</head>
<body>
    <h3>ホットペッパーの千葉県お店情報！</h3>
    <table border="1">
        <tr>
            <th>店舗名</th>
            <th>クーポンURL(PC向け)</th>
            <th>クーポンURL(スマートフォン向け)</th>

        </tr>
        <?php for($i = 0; $i < (int)$arr['results']['results_returned']; $i++): ?>
            <tr>
                <td><a href="<?php echo $restaurants[$i]['urls']['pc']; ?>"><?php echo $restaurants[$i]['name']; ?></a></td>
                <td><a href="<?php echo $restaurants[$i]['coupon_urls']['pc']; ?>">クーポンURL(PC向け)</a></td>
                <td><a href="<?php echo $restaurants[$i]['coupon_urls']['sp']; ?>">クーポンURL(スマートフォン向け)</a></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>



