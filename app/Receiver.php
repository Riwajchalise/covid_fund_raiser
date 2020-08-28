<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $table = 'reciever';

    protected $fillable = ['name','description','country','phone','type','approval','amount'];
}
