<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //inverse relationship of one to many
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $guarded = []; // This allows mass assignment for all attributes. Adjust as necessary.
}
