@extends('layouts.helloapp')

@section('menubar')
    @parent
    Person新規作成ページ
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
    <form action="/person/add" method="post">
        {{ csrf_field() }}
        <p>name: <input type="text" name="name" value="{{ old('name') }}"></p>
        <p>mail: <input type="text" name="mail" value="{{ old('mail') }}"></p>
        <p>age: <input type="number" name="age" value="{{ old('age') }}"></p>
        <p><input type="submit" value="登録"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
