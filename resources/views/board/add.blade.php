@extends('layouts.helloapp')

@section('menubar')
    @parent
    Board新規作成ページ
@endsection

@section('content')
    @if(count($errors))
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/board/add" method="post">
        {{ csrf_field() }}
        <p>person_id: <input type="number" name="person_id"></p>
        <p>title: <input type="text" name="title"></p>
        <p>message: <input type="text" name="message"></p>
        <p><input type="submit" value="登録"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
