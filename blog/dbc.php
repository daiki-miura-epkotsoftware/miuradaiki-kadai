<?php
require_once('env.php');

//①staticを使ってみる
//②アクセス修飾子をつける
//③コンストラクタを理解する
//④継承を使ってみる

Class Dbc
{

    protected $table_name;

    //コンストラクタの使用例
    // function __construct($table_name){
    //     $this->table_name = $table_name;
    // }

    //関数一つに一つの機能のみを持たせる******
    //1.データベース接続
    //2.データを取得する
    //3.カテゴリー名を表示する
    /***************************************/


    //namespaceを設定
    //namespace Blog\Dbc;


    //1.データベース接続
    //引数：なし
    //返り値：接続結果を返す
    protected function dbConnect(){
        $host = DB_HOST;
        $dbname = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASS;
        $dsn  = "mysql:host=$host;dbname=$dbname;charset=utf8";
        try {
            $dbh = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
            
        } catch(PDOException $e){
            echo '接続失敗' . $e->getMessage();
            exit();
        };

        return $dbh;
    }


    //2.データを取得する
    //引数：なし
    //返り値：取得したデータ
    public function getAll(){
        $dbh = $this->dbConnect();
        //①SQLの準備
        $sql = "SELECT * FROM $this->table_name";
        //②SQLの実行
        $stmt = $dbh->query($sql);
        //③SQLの結果を受け取る
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result;
        $dbh = null;
    }





    //詳細画面を表示する流れ***********
    //① 一覧画面からブログのidを送る
    //GETリクエストでidをURLにつけて送る

    //② 詳細ページでidを受け取る
    //PHPの$_GETでidを取得

    //③ idをもとにデータベースから記事を取得
    //SELECT文でプレースホルダーを使う

    //④ 詳細ページに表示する
    //HTMLにPHPを埋め込んで表示
    /***********************************/


    //引数：$id
    //返り値：$result
    public function getById($id){
        //idが空の場合の処理
        if(empty($id)){
            exit('IDが不正です。');
        }


        $dbh = $this->dbConnect();

        // SQL準備
        $stmt = $dbh->prepare("SELECT * FROM $this->table_name WHERE id = :id");
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);

        // SQL実行
        $stmt->execute();
        // 結果を取得
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //idが存在しない(空)場合の処理
        if(!$result){
            exit('ブログがありません。');
        }

        return $result;
    }


    public function delete($id){
        if(empty($id)){
            exit('IDが不正です。');
        }


        $dbh = $this->dbConnect();

        // SQL準備
        $stmt = $dbh->prepare("DELETE FROM $this->table_name WHERE id = :id");
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);

        // SQL実行
        $stmt->execute();
        echo 'ブログを削除しました！';
        // return $result;
    }



}

?>


