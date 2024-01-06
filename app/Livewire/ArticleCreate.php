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
    // public $category_id;

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


        $this->validate();


        $user = Auth::user();

        $article = $user->articles()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'body'=>$this->body,
            'user_id'=>Auth::user()->id,
        ]);

        $article->categories()->attach($this->categoryChecks);

        

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
