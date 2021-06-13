<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;
use App\Models\Photo;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillabe = [
        'title',
        'content',
        'pic',
        'author',
        'short_desc'
    ];

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function videos(){
       return $this->hasMany(Video::class);
    }


}
