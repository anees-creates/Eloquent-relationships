<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Post::withWhereHas('user',function ($query) {
            $query->where('name','=','Kashif');
        })->get();
        foreach ($result as $post) {
      echo "<div style='border:1px solid red; padding:10px; margin:10px;'>"; // Missing semicolon in CSS and closing quote
       echo '<h3>' . $post->title . '</h3>';
      echo '<p>' . $post->description . '</p>'; // Assuming your post content column is 'body', not 'description' as per your SQL dummy data. Adjust if it's 'description'.
         echo '<p><strong>Author:</strong> ' . $post->user->name . '</p>';
        echo '<p><strong>Email:</strong> ' . $post->user->email . '</p>';
        echo '</div>'; // This closes the initial <div>
          
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
