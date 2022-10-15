<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','user_id','post_id'];

    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
