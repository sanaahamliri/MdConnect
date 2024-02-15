<?php
// app\Models\Doctor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role', 'speciality_id'];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
