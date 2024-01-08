<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleCreate extends Component
{
    // public $img;
    public $title;
    public $price;
    public $body;
    public $user_id;
    public $category;
    public $category_id;
    public $article;
    

    public $categoryChecks = [];

    protected $rules=[

        'title'=> 'required|min:3',
        'price'=>'required|max:10',
        'body'=>'required|min:15',
    ];
    protected $messages=[
        
        'title.required'=> 'titolo obbligatorio',
        'price.required'=> 'il prezzo è obbligatorio',
        'body.required'=> 'corpo obbligatorio',
        
    ];


    
    public function articleStore(){


        // dd($this->category);


        // $this->user_id = Auth::user()->id;

        $this->validate();

        $this->article = Category::find($this->category)->articles()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'body'=>$this->body,
            'user_id'=>Auth::user()->id,
        ]);

        $this->article->user()->associate(Auth::user());

        // $article->categories()->attach($this->category_id);



        

        // Article::create([
        //     'title'=>$this->title,
        //     'price'=>$this->price,
        //     'body'=>$this->body, 
        //     'user_id'=>$user->id,
        //     'category_id'=>Category::id()
        // ]);

        // Category::create([
        //     'name'=>$this->name
        // ]);
      
        session()->flash('message' , 'articolo inserito correttamente') ;

        $this->reset(); 

    }
    // public function updated($propertyName){

    //     $this->validateOnly($propertyName);

    // }

    public function render()
    {
        $categories = Category::all();
        
        return view('livewire.article-create', compact('categories'));
    }
}
