@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    <form action="/hello/edit" method="post">
        <p>id:{{ $item->id }}</p>
        <p>name:{{ $item->name }}</p>
        <p>mail:{{ $item->mail }}</p>
        <p>age:{{ $item->age }}</p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
