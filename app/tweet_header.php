<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tweet_header extends Model
{
    //
    protected $table = "tweet_header";

    protected $fillable = [
        'category_bot'
    ];
    
}