@extends('layouts.helloapp')

@section('menubar')
    @parent
    Personインデックスページ
@endsection

@section('content')
        <table>
            <tr>
            </tr>
            @foreach($hasItems as $item)
                <tr>
                    <td>{{ $item->getData() }}</td>
                    @if($item->boards != null)
                        @foreach($item->boards as $obj)
                            <td>{{ $obj->getData() }}</td>
                        @endforeach
                    @endif
                </tr>
            @endforeach
        </table>
        <table>
            <tr>
                投稿してない
            </tr>
            @foreach($noItems as $item)
                <tr>
                    <td>{{ $item->getData() }}</td>
                </tr>
            @endforeach
        </table>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
