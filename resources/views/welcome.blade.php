<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movie</title>
</head>
<body>
  <div class="container">
    @foreach ($movies as $item)
    <div class="card">
        <ul>
            <h4>{{$item['title']}}</h4>
            <li>
                <p>{{$item['original_title']}}</p>
            </li>
            <li>
                <p>{{$item['date']}}</p>
            </li>
            <li>
                <h5>{{$item['vote']}}</h5>
            </li>
        </ul>
    </div>
    @endforeach
</div>
</body>
</html>
