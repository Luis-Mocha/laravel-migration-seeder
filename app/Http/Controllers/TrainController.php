<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//implememtno l'uso del modello train
use App\Models\Train;

class TrainController extends Controller
{
    public function getTrain() {

        $trains = Train::All();

        return view('pages.trains', compact('trains'));
    }
    
}
