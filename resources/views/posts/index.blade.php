<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
<h1><a href="{{ route('posts.index') }}">Laravel News</a></h1> {{-- index.blade.phpへのリンク --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            タイトル：
            <input name="title">
        </div>
        <br><br>
        <div>
            投稿内容：
            <input name="message">
        </div>
        <br><br>
        <button>送信</button>
        <br><br>
    </form>
    @foreach ($posts as $post) {{-- PostControllerのindexメソッド内の「$posts」を受け取る --}}
        <h3>タイトル：{{ $post->title }}</h3>
        <p>投稿内容：{{ $post->message }}</p>
        <br>
        <br>
    @endforeach
</body>
</html>
