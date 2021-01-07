<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="{{asset('css/style2.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap" rel="stylesheet">
    <title>detail</title>
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
        <div class="container-plus">
            <div class="container-img">
                <img src="/{{$DETAIL[0]->photo}}">
            </div>
            <div class="container-details">
                <div class="title">{{$DETAIL[0]->title}}</div>
                <div class="rating"><img src="/{{$DETAIL[0]->rating}}"></div>
                <div class="intro">
                    {{$DETAIL[0]->description}}
                </div>
                <div class="type-category">
                    <div>Kategori :&nbsp</div>
                    <a href="{{route('category', $DETAIL[0]->genre_id)}}">{{$DETAIL[0]->name}}</a>
                </div>
            </div>
            <div class="container-episode">
                EPISODE
                
                <div class="slide-container">
                    <div class="episode">episode &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp judul</div>
                    @foreach ($EPISODE as $e)

                    <div class="episode-list">{{$e->episode}} &nbsp&nbsp&nbsp&nbsp: {{$e->title}}</div>

                    @endforeach
                </div>
                <div class = "arrow">
                    {{$EPISODE->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>