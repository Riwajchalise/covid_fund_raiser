<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';

    protected $fillable = ['receiver_id','user_id','amount'];

    public function receiver()
    {
        return $this->belongsTo('App\Receiver');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
