@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>本文コンテンツ</p>

    <ul>
        @each('components.item', $data, 'item')
    </ul>

@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
