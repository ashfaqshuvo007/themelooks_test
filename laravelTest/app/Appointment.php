<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
        'slot_id', 'patient_name', 'doctor_id','deleted_at',
    ];


    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function slot()
    {
        return $this->belongsTo('App\Slot');
    }
}