<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;

use Illuminate\Http\Request;

class vehicleController extends Controller
{
    public function index(){
        $vehicles=Vehicle::all(); //metodo all

        return view("ListCars",compact("vehicles"));
    }
}
