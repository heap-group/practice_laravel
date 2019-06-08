@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/hello/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $form->id }}">
        <p>name:<input type="text" name="name" value="{{ $form->name }}"></p>
        <p>mail:<input type="text" name="mail" value="{{ $form->mail }}"></p>
        <p>age:<input type="text" name="age" value="{{ $form->age }}"></p>
        <p><input type="submit" value="登録"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
