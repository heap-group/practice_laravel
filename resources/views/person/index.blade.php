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
                    @if($item->boards != null)
                        @foreach($item->boards as $obj)
                            <td>{{ $obj->getData() }}</td>
                        @endforeach
                    @endif
                </tr>
            @endforeach
        </table>
    </table>
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
