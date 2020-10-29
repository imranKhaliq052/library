<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class booksController extends Controller
{
    public function store () { 

    	$data=request()->validate([ 'title'=>'required' , 'author'=>'required' ]);   

    	  book::create($data);


    	//book::Create([ 'title'=>request('title'), 'author'=>request('author') ]);


    }

    public function update(book $book){
         
         $data=request()->validate([
             'title'=>'required',
             'author'=>'required',

         	]);
         $book->update($data);

    }

}
