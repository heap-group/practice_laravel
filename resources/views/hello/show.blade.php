@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @foreach($items as $item)
        @if($item != null)
            <p>id:{{ $item->id }}</p>
            <p>name:{{ $item->name }}</p>
            <p>mail:{{ $item->mail }}</p>
            <p>age:{{ $item->age }}</p>
        @endif
    @endforeach
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
