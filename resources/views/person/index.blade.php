@extends('layouts.helloapp')

@section('menubar')
    @parent
    Personインデックスページ
@endsection

@section('content')
    <table>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>mail</th>
                <th>age</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->mail}}</td>
                    <td>{{$item->age}}</td>
                </tr>
            @endforeach
        </table>
    </table>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
