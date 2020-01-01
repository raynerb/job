<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    //
    public function show()
    {
        return (Candidat::all()); // TODO: list des candidats
    }

    public function delete($id)
    {
        $candidat = Candidat::find($id);
        $candidat->delete();
    }

}
