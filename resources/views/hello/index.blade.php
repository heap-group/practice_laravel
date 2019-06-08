@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>本文コンテンツ</p>

    @include('components.massage', ['message_title' => 'OK',
    'message_content' => 'サブビュー'])

@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
