<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{
    // public $img;
    public $title;
    public $price;
    public $body;



    protected $rules=[

        'title'=> 'required|min:3',
        'price'=>'required',
        'body'=>'required|min:15',
    ];
    protected $messages=[
        
        'title.required'=> 'titolo obbligatorio',
        'price.required'=> 'il prezzo è obbligatorio',
        'body.required'=> 'corpo obbligatorio',
        
    ];


    
    public function articleStore(){

        $this->validate();

     
        Article::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'body'=>$this->body,
        ]);  
        session()->flash('message' , 'articolo inserito correttamente') ;
        $this->reset(); 

    }
    // public function updated($propertyName){

    //     $this->validateOnly($propertyName);

    // }

    public function render()
    {
        
        return view('livewire.article-create');
    }
}
