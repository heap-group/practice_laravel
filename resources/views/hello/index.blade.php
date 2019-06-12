@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
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
