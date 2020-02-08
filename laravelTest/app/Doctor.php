<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'status', 'doctor_name',
    ];

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}