@extends('layout.layout')
@section('content')
    <form action="{{route('create-post')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Заголовок</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок" name="header">
        </div>

        @error('header')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Что нибудь большое</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>
        </div>
        @error('info')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="exampleFormControlInput2">Маленькое описание</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="что нибудь небольшое" name="signature">
        </div>
        @error('signature')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary btn-lg">Создать пост</button>
    </form>
@endsection
