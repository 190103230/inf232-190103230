<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index($id)
    {
        return "OK".$id;
    }//
}
