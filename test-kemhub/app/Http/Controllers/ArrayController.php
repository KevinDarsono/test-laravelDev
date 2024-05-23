<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ArrayLength(){
        $data = ['Nuttela', 'Mars', 'Snickers', 'Kinder', 'Cadbury'];
        $length = array_map('strlen', $data);

        return response()->json($length);
    }
}
