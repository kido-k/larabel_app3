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
    <p>&#064;foreachディレクティブの例</p>
    <ol>
    @foreach($data as $item)
    <li>
    {{$item}}
    </li>
    @endforeach
    </ol>
    <p>&#064;forディレクティブの例</p>
    <ol>
    @for ($i = 1; $i < 100; $i ++)
    @if($i % 2 == 1)
        @continue
    @elseif ($i <= 10)
        <li>No, {{$i}}</li>
    @else
        @break
    @endif
    @endfor
    </ol>
</body>
</html>
