<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Student::withWhereHas('Contact',function($query){
           $query->where('city' , '=', 'Lahore');
        })->get();
            
        return $result;
    }

    
     /* Show the form for creating a new resource.
     */
    public function create()
    {
      $result = Student::create([
           'name' => 'Ali',
           'age' => 20,
            'gender' => 'male'
      ]);
      $result->contact()->create([
          'email' => 'ali@gmail.com',
        'phone' => '1234567890',
        'address' => '123 Street Name',
           'city' => 'Bahawalpur',

      ]);
      return "data added successfully";
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
