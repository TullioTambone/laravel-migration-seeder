<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function getTrain(){
        return view('welcome');
    }
}
