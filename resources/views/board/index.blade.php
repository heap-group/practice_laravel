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
                    <td>{{ $item->getData() }}</td>
                </tr>
            @endforeach
        </table>
    </table>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
