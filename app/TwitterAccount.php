<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterAccount extends Model
{
    protected $fillable = ['twitter_user_id','access_token', 'user_id', 'screen_name', 'image'];
}
