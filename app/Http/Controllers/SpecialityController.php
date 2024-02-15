<?php

namespace App\Http\Controllers;

use App\Models\speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function specialities()
    {
        $specialities = speciality::all();
        return view('dashboard', ['specialities' => $specialities]);
    }

    public function specialitiesDoctor()
    {
        $specialities = speciality::all();
        return view('doctorDash', ['specialities' => $specialities]);
    }

    public function specialitiesChoise()
    {
        $specialities = speciality::all();
        return view('', ['specialities' => $specialities]);
    }

    public function specialitiesAdmin()
    {
        $specialities = speciality::all();
        return view('', ['specialities' => $specialities]);
    }
}
