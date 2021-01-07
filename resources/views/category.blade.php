<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap" rel="stylesheet">
    <title>BeeFlix</title>
</head>
<body>
    <header>
        <div class="header">
            <a href="/" class="logo">BeeFlix</a>
        </div>
        <div class="button-header">
            <a href="{{URL::previous()}}" class="back-btn"> &#8592 KEMBALI</a>
            <a href="/" class="viewAll-btn">LIHAT SEMUA FILM</a>
        </div>
    </header>

    <div class="container">
        <div class="type">{{$CATEGORY[0]->name}}</div>
        <div class="container-plus">
                @foreach ($CATEGORY as $category)
                <div class="list-1">
                    <div class="image-1"><img src="/{{$category->photo}}"></div>
                    <div class="judul-1">{{$category->title}}</div>
                    <div class="container-btn">
                        <a href="{{route('detail', $category->id)}}" class="btn-1" type="button">LIHAT FILM</a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</body>
</html>