@extends('layouts.helloapp')

@section('menubar')
    @parent
    Person更新ページ
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
    <form action="/person/edit" method="post">
        {{ csrf_field() }}
        <p>name: <input type="hidden" name="id" value="{{ $form->id }}"></p>
        <p>name: <input type="text" name="name" value="{{ $form->name }}"></p>
        <p>mail: <input type="text" name="mail" value="{{ $form->mail }}"></p>
        <p>age: <input type="number" name="age" value="{{ $form->age }}"></p>
        <p><input type="submit" value="更新"></p>
    </form>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
