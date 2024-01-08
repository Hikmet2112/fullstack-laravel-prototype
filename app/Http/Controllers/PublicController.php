<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {

   


        $articles = Article::orderBy('created_at','desc')->take(6)->get();
        // dd($articles);
        return view('welcome',compact('articles'));
        
    }

    public function categoryShow(Category $category){
        
        return view('categoryShow', compact('category'));
    }
}
