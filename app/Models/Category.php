<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['business','entertainment','modal','post_id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

}
