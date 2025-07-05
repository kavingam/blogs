<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmitCardController extends Controller
{
    public function index() {
        return view('admitcards.index');
    }
}
