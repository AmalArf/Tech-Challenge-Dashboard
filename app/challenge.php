<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class challenge extends Model
{
    protected $fillable = [
        'title','status', 'description', 'startDate','finishDate','id_organizer'
       ];

    }
