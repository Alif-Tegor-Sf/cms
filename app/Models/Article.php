<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Article extends Model
{
    use HasFactory;
     
    protected $table = "articles";
    
    protected $fillable = [
        'title',
        'content',
        'featured_image'
    ];
}