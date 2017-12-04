<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterCalculatorController extends Controller
{
    public function show(){
        include_once '..\..\..\resources\views\calc\calc-view.php';
    }
}
