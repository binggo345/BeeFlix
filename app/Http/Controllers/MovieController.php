<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function welcome(){
        $DRAMA = DB:: table('movies')
        -> where('genre_id', '=', '1')
        -> get();
        $KIDS = DB:: table('movies')
        -> where('genre_id', '=', '2')
        -> get();
        $TVSHOW = DB:: table('movies')
        -> where('genre_id', '=', '3')
        -> get();

        return view('welcome')->with(compact('DRAMA', 'KIDS', 'TVSHOW'));
    }

    public function detail($id){
        $DETAIL = DB:: table('episodes')
        -> join('movies', 'movies.id', '=', 'episodes.movie_id')
        -> join('genres', 'genres.id', '=', 'movies.genre_id')
        -> where('movie_id', $id)
        -> get();
        $EPISODE = DB:: table('episodes')
        -> where('movie_id', $id)
        -> paginate(3);

        return view('detail', ['DETAIL' => $DETAIL], ['EPISODE' => $EPISODE]);
    }

    public function category($id){
        $CATEGORY = DB:: table('movies')
        -> join('genres', 'genres.id', '=', 'movies.genre_id')
        -> where('genre_id', $id)
        -> get();

        return view('category')->with(compact('CATEGORY'));
    }


}
