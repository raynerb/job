<?php

namespace App\Http\Controllers;

use App\Models\Cotation;
use Illuminate\Http\Request;

class CotationController extends Controller
{
    public function show()
    {
        return(Cotation::all()); // TODO: Change the autogenerated stub
    }
}
