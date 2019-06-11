@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <form action="/hello/session" method="post">
        {{ csrf_field() }}
        <p>session_value:<input type="text" name="input"></p>
        <p><input type="submit" value="登録"></p>
    </form>
    <p>{{ $session_data }}</p>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
