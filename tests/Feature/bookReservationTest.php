<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\book;

class bookReservationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withoutExceptionHandling();
       $response=$this->post('/books', [ 'title'=> 'imran' , 'author' => 'victor']);
       $response->assertOk();   
      // $response->assertSessionHasErrors('title');
       $this->assertCount(1,book::all());
      
     
       
    }


    /** @test */

    public function a_book(){
 $this->withoutExceptionHandling();
 $this->post('/books', [ 'title'=> 'imran' , 'author' => 'victor']);
  $book=book::first();
      $response=$this->patch('/books/'.$book->id , [ 'title'=> 'imran' , 'author' => 'victor']);
      $response->assertOk(); 
    


    }



}
