<form action="/rest/" method="post">
    {{ csrf_field() }}
    <p>message: <input type="text" name="message" value="{{ old('message') }}"></p>
    <p>url: <input type="text" name="url" value="{{ old('url') }}"></p>
    <p><input type="submit" value="登録"></p>
</form>
