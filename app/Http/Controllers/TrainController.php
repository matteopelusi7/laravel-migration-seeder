<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    
    public function index() {

        $trains = Train::where('giorno_di_partenza', 'Friday')->get();

        return view('home', compact('trains'));

    }

}
