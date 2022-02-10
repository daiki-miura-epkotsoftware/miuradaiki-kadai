<?php
// １．動画同様、寿司のレストランデータを取得。平均予算が最も低い1件のデータを表示する。
$key = '';

$response = file_get_contents("http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key={$key}&name=寿司&format=json");

$arr = json_decode($response, true);



$restaurants = $arr['results']['shop'];

$mostCheapest = $restaurants[0] ?? NULL;

// 最も安い予算のレストランの配列が何番目か割り出す
foreach ($restaurants as $rest) :
    if((int)$mostCheapest['budget']['name'] > (int)$rest['budget']['name']){
        $mostCheapest = $rest;
    }
endforeach;

// 導いた一番安いレストランの情報を表示
foreach($mostCheapest as $key1 => $cheapes):
    if(is_array($cheapes)){
        foreach($cheapes as $key2 => $value):
            if(!is_array($value)){
                echo $key2 . '：' . $value . '<br>';
            }else{
                foreach($value as $key3 => $result):
                    echo $key3 . '：' . $result . '<br>';
                endforeach;
            }
        endforeach;    
    }else{
        echo $key1 . '：' . $cheapes . '<br>';
    }
endforeach;





?>
