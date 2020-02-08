<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    //fillable
    protected $fillable = [
        'date', 'duration', 'time',
    ];


    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}