<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title',
    'body',
    'admin_id',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    
    
}
