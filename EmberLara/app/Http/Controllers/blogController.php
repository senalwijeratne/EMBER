<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB; 

/**
* 
*/
class blogController extends Controller
{
    //to power movie page
    function newPost()
    {
        //calling an index thats in a file
         return view('EMBER.userInputPost');   
    }

    function createPost()
    {
        $post = new post();
        $post -> title = input::get('title');
        $post -> content =nl2br(input::get('content'));
        $post -> save();

        return Redirect::route('EMBER.notifications' ,array('id' => $post->id ));
    }

       function viewPost($id)
    {
        $post = Post::findOrFail($id);
        return view('EMBER.userInputPost', array('post' => $post ));  
 
    }

    function insertPost(Request $req)
    {
       $title = $req ->input('title');
       $content = $req ->input('content');
       $data = array('title'=>$title,'content'=>$content);
       DB::table('posts')->insert($data);
       echo "worked";
    }

    // function getData()
    // {
    //     $data['data'] = DB::table('posts')->get();

    //     if(count($data) >0)
    //     {
    //         return view('EMBER.notifications',$data);
    //     }
    //     else
    //     {
    //         return view('EMBER.notifications');
    //     }
    // }
}