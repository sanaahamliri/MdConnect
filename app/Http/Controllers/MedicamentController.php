<?php

// app\Http\Controllers\MedicamentController.php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Models\Doctor;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    public function index($doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        $medicaments = $doctor->medicaments;

        return view('doctorDash.medicaments.index', compact('medicaments', 'doctor'));
    }

    public function create($doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        return view('doctorDash.medicaments.create', compact('doctor'));
    }

    public function store(Request $request, $doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);

        $medicament = new Medicament($request->all());
        $doctor->medicaments()->save($medicament);

        return redirect()->route('medicaments.index', $doctorId);
    }

    public function edit($doctorId, $medicamentId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        $medicament = Medicament::findOrFail($medicamentId);

        return view('doctorDash.medicaments.edit', compact('doctor', 'medicament'));
    }

    public function update(Request $request, $doctorId, $medicamentId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        $medicament = Medicament::findOrFail($medicamentId);

        $medicament->update($request->all());

        return redirect()->route('medicaments.index', $doctorId);
    }

    public function destroy($doctorId, $medicamentId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        $medicament = Medicament::findOrFail($medicamentId);

        $medicament->delete();

        return redirect()->route('medicaments.index', $doctorId);
    }

    // Ajoutez d'autres méthodes en fonction de vos besoins.
}
