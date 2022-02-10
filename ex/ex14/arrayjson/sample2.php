<?php
// 自分のAPIkeyを入力
$keyApi = '';

// json形式のデータを取得,店舗名に寿司,json形式(デフォルト値はxmlだそう)
$response = file_get_contents("http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key={$keyApi}&name=寿司&format=json");

// json形式のデータを連想配列に変換
$arr = json_decode($response, true);


// 検索結果のショップ一覧を格納
$shops = $arr['results']['shop'];

// NULL合体演算子を使って空の場合はNUllを返す
// $mostExpensive = $shops[0] ?? NULL;

// array_colum()で'budget'のkeyの配列を取り出す。
$values =array_column($shops, 'budget');

// var_dump($values);
foreach($values as $info){
    foreach($info as $key => $value){
        if($key === 'average'){
            echo $key . 'は' . $value . '<br>'; // 平均金額のみ表示したい
        }
        // echo $key . 'は' . $value . '<br>';  3要素すべて表示
    }
}

?>