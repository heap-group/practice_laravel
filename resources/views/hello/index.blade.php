<html>
    <head>
        <title>Hello index</title>
    </head>
    <body>
        <h1>Bladeの利用</h1>
        <p>{{ $msg }}</p>
        <form method="POST" action="/hello">
            {{ csrf_field() }}
            <input type="text" name="msg">
            <input type="submit" name="送信">
        </form>
    </body>
</html>
