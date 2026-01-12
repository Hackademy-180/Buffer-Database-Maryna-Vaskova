<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Museum;
use App\Models\Movie;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function books_index(){
        // collection
        $books = Book::all();
        return view('books.index', compact("books"));
    }
    
    public function museums_index(){
        // collection
        $museums = Museum::all();
        return view('museums.index', compact("museums"));
    }

    public function movies_index(){
        // collection
        $movies = Movie::all();
        return view('movies.index', compact("movies"));
    }
    
    public function books_create(){
        return view('books.create');
    }
    
    public function museums_create(){
        return view('museums.create');
    }

    public function movies_create(){
        return view('movies.create');
    }
    
    public function book_submit(Request $request){
        
        Book::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'year'=>$request->year,
            'description'=>$request->description
        ]);
        return redirect(route('homepage'))->with('status', 'Libro aggiunto!');  
    }

    public function museum_submit(Request $request){
        Museum::create([
            'title'=>$request->title,
            'country'=>$request->country,
            'year'=>$request->year,
            'description'=>$request->description
        ]);
        return redirect(route('homepage'))->with('status', 'Museo aggiunto!');  
    }

    public function movie_submit(Request $request){
        
        Movie::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'year'=>$request->year,
            'description'=>$request->description
        ]);
        return redirect(route('homepage'))->with('status', 'Film aggiunto!');  
    }
    
    
}
