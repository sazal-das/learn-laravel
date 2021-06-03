<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('posts');
    $posts = post::all();
    // ddd($posts[0]->getContents());
    return view('posts', ['posts' => $posts]);
});

Route::get('posts/{post}', function ($id) {
    // return $slug;
    // return view('post', [
    //     'post' => '<h1>Hello</h1>'
    // ]);

    // $post = post::find($id);
    // ddd($post);

    // return view('post', ['post' => $post]);
    return view('post', ['post' => post::findOrFail($id)]);


    // $path = __DIR__ . "/../resources/posts/{$slug}.html";
    // // ddd($path);
    // if (!file_exists($path)){
    //     return redirect('/');
    //     // abort(404);
    // }

    // $post = cache()->remember("posts.{$slug}", 5, function () use ($path) {
    //     // var_dump('file_get_content');
    //     return file_get_contents($path);
    // });

    // // $post = file_get_contents($path);
    // return view('post', ['post' => $post]);
});
// ->where('post', '[A-z_\-]+');
// ->whereAlpha('post');

