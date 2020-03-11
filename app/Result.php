<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'id_user', 'id_challenge', 'code','winner'
       ];
}
