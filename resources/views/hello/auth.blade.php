@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    ログインページ
@endsection

@section('content')
    <p>{{ $message }}</p>
    <form action="/hello/auth" method="post">
        {{ csrf_field() }}
        <p>mail:<input type="text" name="mail"></p>
        <p>password:<input type="password" name="password"></p>
        <p><input type="submit" value="ログイン"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
