<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'des', 'detail', 'category', 'public', 'data_pubblic', 'position', 'thumbs'];

}
