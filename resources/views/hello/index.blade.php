@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>本文コンテンツ</p>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
