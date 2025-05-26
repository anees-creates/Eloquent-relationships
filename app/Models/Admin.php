<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_roles');
    }
}
