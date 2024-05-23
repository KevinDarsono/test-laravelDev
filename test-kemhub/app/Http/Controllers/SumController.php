<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function Sum(){
        $numbers = [15, 18, 3, 9, 6, 2, 12];
        $sum = 0;

        foreach ($numbers as $number){
            if ($number % 2 == 0){
                $sum += $number;
            }
        }

        return response()->json($sum);
    }
}
