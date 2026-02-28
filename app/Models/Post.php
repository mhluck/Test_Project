<?php

namespace App\Models;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Arr;

class Post extends Model
{
    //use HasFactory;

    protected $table = 'blog_posts';
    protected $primaryKey = 'id';
}