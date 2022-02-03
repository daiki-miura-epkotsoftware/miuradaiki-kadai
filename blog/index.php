<?php

/*ブログ削除機能作成 
①index.php微修正
②configをつくってDB接続値を定義
③htmlspecialcharsについて(セキュリティ)
④削除機能をつくる
*/


/*編集機能作成 
①編集ボタンクリックでIDを送る
②IDを受け取り内容を表示
③編集データとIDを渡す
④IDから探してDBを更新する
*/

//ブログ投稿機能作成とトランザクション~
//①フォームから値を渡す
//②フォームから値を受け取る
//③バリデーションする
//④トランザクションを開始
//⑤データをDBに登録する

require_once('blog.php');
//取得したデータを表示

//エラー内容の表示
// ini_set('display_errors', "On");

$blog = new Blog();

//useでnamespaceを簡略化
//namespaceを設定するとBlog\Dbc\を先頭に付けるがuseでDbc\で使えるようになる。
//use Blog\Dbc;


$blogData = $blog->getAll();

//htmlspecialcharsの関数を定義
function h($s){
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ一覧</title>
</head>
<body>
    <h2>ブログ一覧</h2>
    <p><a href="form.html">新規作成</a></p>
    <table>
        <tr>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>投稿日時</th>
        </tr>
        <?php foreach($blogData as $column): ?>
        <tr>
            <td><?php echo h($column['title']) ?></td>
            <td><?php echo h($blog->setCategoryName($column['category'])) ?></td>
            <td><?php echo h($column['post_at']) ?></td>
            <td><a href="detail.php?id=<?php echo $column['id'] ?>">詳細</a></td>
            <td><a href="update_form.php?id=<?php echo $column['id'] ?>">編集</a></td>
            <td><a href="blog_delete.php?id=<?php echo $column['id'] ?>">削除</a></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
