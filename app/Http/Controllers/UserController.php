<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$result = User::with('posts')->get();
        //incase you want to know only users who have posts
        $result = User::has('posts')->with('posts')->get();
        //incase you want to get users with posts count
        $result = User::withCount('posts')->get();
        //incase you want to get users with posts with speific number of posts
        $result = User::has('posts', '>', 1)->with('posts')->get();
        // incase you want to get users who do not have posts
        //$result = User::doesntHave('posts')->get();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //creating a new post for an existing user
        $result =  User::find(6);

        $result->posts()->create([
            'title' => 'New Post',
            'description' => 'This is a new post created for the user.',
        ]);
        return "Post created successfully for user with ID 6.";
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
