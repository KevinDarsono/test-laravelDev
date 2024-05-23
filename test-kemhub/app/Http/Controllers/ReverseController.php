<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReverseController extends Controller
{
    public function Reverse(Request $request){
        $a = $request->input('a');
        $b = $request->input('b');

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        return response()->json(['a' => $a, 'b' => $b]);
    }
}
