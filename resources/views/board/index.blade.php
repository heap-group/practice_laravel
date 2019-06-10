@extends('layouts.helloapp')

@section('menubar')
    @parent
    Boardインデックスページ
@endsection

@section('content')
    <table>
        <table>
            <tr>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->person['name'] }}</td>
                </tr>
            @endforeach
        </table>
    </table>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
