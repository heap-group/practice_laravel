@extends('layouts.helloapp')

@section('menubar')
    @parent
    Person検索ページ
@endsection

@section('content')
    <form action="/person/find" method="post">
        {{ csrf_field() }}
        <p><input type="text" name="input" value="{{ $input }}"></p>
        <p><input type="submit" value="検索"></p>
    </form>
    @if(isset($item))
        <table>
            <table>
                <tr>
                    <th>Data</th>
                </tr>
                <tr>
                    <td>{{ $item->getData() }}</td>
                </tr>
            </table>
        </table>
    @endif
@endsection

@section('footer')
    <small>copy &copy;</small>
@endsection
