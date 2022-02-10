<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ver;

class VerController extends Controller
{
    public function index(){
        // try-catch文で例外処理、tryを基本行うが当てはまらなければcatchを実行
        try{
            // Eloquent ORMのVerのメソッドfirst()
            // クエリを実行しレコードの最初の結果を配列で取得
            $version = Ver::first();
            $result = [
                'result' => true,
                'version' => $version->version,
                'min_version' => $version->min_version
            ];
        } catch(\Exception $e){ //Exceptionにエラー
            $result = [
            'result' => false,
            'error' => [
                'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
  
        return $this->resConversionJson($result);
    }

    //resConversionJsonというメソッドを作成
    // データをJSON形式で返す
    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, 
        ['Content-Type' => 'application/json',JSON_UNESCAPED_SLASHES]);
    }

    // json.blade.phpを表示するメソッドshowData()
    public function showData(){
        return view('ver.json');
    }

}
