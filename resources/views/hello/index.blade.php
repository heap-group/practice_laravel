@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @if(Auth::check())
        <p>User: {{ $user->name. '...'. $user->email }}</p>
    @else
        <p>ログインなし</p>
        <a href="/login">ログイン</a>
        <a href="/register">登録</a>
    @endif
    <table>
        <table>
            <tr>
                <th>name</th>
                <th>mail</th>
                <th>age</th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
            @endforeach
        </table>
    </table>
    {{ $items->links() }}
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
