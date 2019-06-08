@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/hello/add" method="post">
        {{ csrf_field() }}
        <p>name:<input type="text" name="name"></p>
        <p>mail:<input type="text" name="mail"></p>
        <p>age:<input type="text" name="age"></p>
        <p><input type="submit" value="登録"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
