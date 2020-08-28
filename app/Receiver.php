<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $table = 'receivers';

    protected $fillable = ['name','description','country','phone','type','approval','amount'];
}
