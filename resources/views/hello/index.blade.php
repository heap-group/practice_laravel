@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>本文コンテンツ</p>


    <p>これは、<middleware>google.com</middleware>へのリンクです</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>

@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
