@extends('layouts.helloapp')

@section('menubar')
    @parent
    Personインデックスページ
@endsection

@section('content')
    <table>
        <table>
            <tr>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->getData() }}</td>
                    @if($item->board != null)
                    <td>{{ $item->board->getData() }}</td>
                    @endif
                </tr>
            @endforeach
        </table>
    </table>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
