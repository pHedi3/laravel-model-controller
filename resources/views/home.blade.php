<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($allMovies as $movie)
                <div class="col-3 tag">
                    <h1>{{$movie->title}}</h1>
                    <h2>{{$movie->original_title}}</h2>
                    <h3>{{$movie->nationality}}</h3>
                    <h3>{{$movie->date}}</h3>
                    <h2>{{$movie->vote}}</h2>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>