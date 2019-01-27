<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'post';

    protected $fillable = [
        'user_id', 'title', 'text', 'created_at'
    ];
}
