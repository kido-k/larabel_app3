<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {
        font-size:100pt; text-align:right; color:#f6f6f6;
        margin:-50px 0px -100px 0px;
    }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    @unless ($msg == '')
    <p>こんにちは、unlessさん</p>
    @endunless
    @empty ($msg)
    <p>こんにちは、emptyさん</p>
    @endif
    @if ($msg != '')
    <p>こんにちは、{{$msg}}さん</p>
    @else
    <p>何か書いてください</p>
    @endif
    <!-- @isset ($msg)
    <p>こんにちは、{{$msg}}さん</p>
    @else
    <p>msgが未定義です</p>
    @endisset -->
    <form method="POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>
