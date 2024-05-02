<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルを使用するために追加
use App\Http\Requests\StorePostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.index', ['posts' => $posts]); // views/posts/index.blade.php を表示する
    }

    //追記
    public function store(StorePostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->message = $request->message;
        $post->save();
        return redirect()->route('posts.index');
    }
}