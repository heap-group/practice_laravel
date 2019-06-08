@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文コンテンツ</p>
    <p>本文コンテンツ</p>

    <table>
        @foreach($data as $item)
        <tr><th>{{ $item['name'] }}</th><td>{{ $item['mail'] }}</td></tr>
        @endforeach
    </table>

@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
