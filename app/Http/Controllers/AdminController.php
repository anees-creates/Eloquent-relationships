<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Admin::get();
        foreach ($result as $admin){
            echo $admin->name . "<br>";
            echo $admin->email. "<br>";
         foreach($admin->roles as $role){
              echo $role->role_name . "/";
            
         }
         echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin = Admin::find(4);
       // $admin->roles()->attach(2); // Attaching role with ID 2 to admin with ID 4
        $admin->roles()->detach(2); //deatching the role number 2 from user no 4
        return "role deleted succesfully";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
