<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>dufhedueh</h1>
    <p>{{$data}}</p>
    <p>{{$hello}}</p>
    <p>{{$arr[0]}}</p>

   
    @foreach($arr as $item)
        <li>{{$item}}</li>
    @endforeach

    @if ($arr[0] =='ayoub')
            <p>Correct</p>
    @else
     <p>Uncorrect</p>
    @endif

</body>
</html>