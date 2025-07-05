<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerKeyController extends Controller
{
    public function index() {
        return view('answers.index');
    }
}
