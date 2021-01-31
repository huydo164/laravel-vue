<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    public $timestamp = false;
    protected $fillable = ['id', 'title', 'des', 'detail', 'category', 'public', 'data_pubblic', 'position', 'thumbs'];

}
