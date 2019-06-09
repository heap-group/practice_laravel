@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    Person削除ページ
@endsection

@section('content')
    <form action="/hello/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $form->id }}">
        <p>name: {{ $form->name }}</p>
        <p>mail: {{ $form->mail }}</p>
        <p>age: {{ $form->age }}</p>
        <p><input type="submit" value="削除"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
