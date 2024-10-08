<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "body", "user_id"];

    public function user() {
        // Tells Laravel to conduct the Join on (table, column)
        return $this->belongsTo(User::class, "user_id");
    }
}

// return $this->belongsTo(User::class, "auth()->id");