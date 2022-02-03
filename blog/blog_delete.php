<?php
require_once('blog.php');

$blog = new Blog();
$result = $blog->delete($_GET['id']);

?>

<p><a href="/blog_kadai">戻る</a></p>