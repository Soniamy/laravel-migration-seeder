<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
   public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::whereDate('departure_time', $currentDate)->get();

        return view('index', compact('trains'));
    }
}
