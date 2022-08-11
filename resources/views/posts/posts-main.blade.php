@extends('layout.layout')
@section('content')
    @include('included.success-message')
   @foreach($posts as $post)
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$post->header}}</h5>
                <small>{{$post->updated_at}}</small>
            </div>
            <p class="mb-1">{{$post->info}}</p>
            <small>{{$post->signature}}</small>
        </a>
       @can('edit-post-by-crater-user',$post)
            <a href="{{route('edit-post',['postId'=>$post->id])}}" class="btn btn-secondary btn-lg">Мои посты</a>
        @endcan





    </div>
   @endforeach
<div class="container d-flex  justify-content-between">
    <a href="{{route('post-add')}}" class="btn btn-primary btn-lg">Создать пост</a>
    <a href="*" class="btn btn-secondary btn-lg">Мои посты</a>
    <a href="{{route('logout')}}" class="btn btn-danger btn-lg">Выйти</a>
</div>
@endsection
