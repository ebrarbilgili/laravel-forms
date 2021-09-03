<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $directory = '/files/';
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'path'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\User');
    }
}
