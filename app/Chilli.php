<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chilli extends Model
{
    protected $table = 'chillies';

    protected $fillable = ['name', 'species', 'origin', 'heat', 'scoville'];
}
