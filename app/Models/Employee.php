<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\phone_number;

class Employee extends Model
{ 
    public function company(){
        return $this->hasOne(Company::class);
    }
     public function phonenumber(){
   
   
    return $this->hasOneThrough(phone_number::class, Company::class);
}
   
}
