<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function trainList() {
        $trains = Train::all();
        return view('train-list', compact('trains'));
    }
    
}