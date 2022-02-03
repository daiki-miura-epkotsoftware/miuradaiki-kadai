<!--
①共通テンプレlayout.blade.phpを作る
②共通ヘッダーを作る
③共通フッターを作る
④共通テンプレを継承したリストを作る
-->
<!--ブログ詳細画面を表示する流れ
①リンクを作る
②routeを作る
③(CM)Controllerを作る
④(V)詳細画面を作る
-->

<!--ブログ更新機能を実装する流れ
①route作成(編集ボタン)
②controller作成
③編集フォーム(View)づくり
④データ更新機能(Model)づくり
-->

<!--ブログ削除機能を実装する流れ
①route作成(削除ボタン)
②Controller作成
③削除機能づくり
-->

@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      @if(session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
      @endif
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>タイトル</th>
              <th>日付</th>
              <th></th>
              <th></th>
          </tr>
          @foreach($blogs as $blog)
          <tr>
              <td>{{$blog->id}}</td>
              <td><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></td>
              <td>{{$blog->updated_at}}</td>
              <td><button type="button" class="btn btn-primary"
               onclick="location. href='/blog/edit/{{ $blog->id }}'">
              編集</button></td>
              <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()">
                @csrf
              <td><button type="submit" class="btn btn-primary"
               onclick=>
              削除</button></td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
<script>
    function checkDelete(){
    if(window.confirm('削除してよろしいですか？')){
        return true;
    } else {
        return false;
    }
    }
</script>
@endsection
