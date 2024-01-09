<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller


{
    

  public function index(){
 
    $article_to_check=Article::where('is_accepted',null)->first();

    return view('revisor.index',compact('article_to_check'));

  }  

  public function acceptArticle(Article $article) { 

    $article->setAccepted(true); 

    return redirect()->back()->with('message','Annuncio accettato'); 


  }  

  public function rejectArticle(Article $article) { 

    $article->setAccepted(false); 

    return redirect()->back()->with('message','Annuncio rifiutato'); 


  }  

  public function becomeRevisor(){

    Mail::to('hello@example.com')->send(new BecomeRevisor(Auth::use())); 

    return redirect()->back()->whith('message','Complimenti sei diventato revisore');
  }

  public function makeRevisor(){

    Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]); 

    return redirect('/')->whith('message','L\'utente è diventato revisore');
  }

  

}
