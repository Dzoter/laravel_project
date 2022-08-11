<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Models\Posts;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    public function createPost(AddPostRequest $addPostRequest)
    {
        $newPost = (new Posts())->create($addPostRequest->only('header', 'info', 'signature'));
        if ($newPost) {
            return redirect()->route('posts-main')->with('success', 'Пост создан успешно');
        }

        return redirect()->route('posts-add')->withErrors(
            ['header' => 'Не удалось создать пост из за проблем на сервере']
        );
    }

    public function getAllPosts()
    {
        return view('posts.posts-main', ['posts' => Posts::all()]);
    }

    public function editPost($postId)
    {
        $post = DB::table('posts')->find($postId);


        if (Gate::authorize('edit-post-by-crater-user',$post)){

            return view('posts.edit-post',['postId'=>$postId]);
        }

        return redirect()->route('posts-main');
    }
}
