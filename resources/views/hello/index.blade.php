@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>本文コンテンツ</p>

    @component('components.massage')
        @slot('message_title')
            CAUTION!
        @endslot

        @slot('message_content')
            これはメッセージの表示です
        @endslot
    @endcomponent
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
