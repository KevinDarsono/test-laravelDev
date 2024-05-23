<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function Palindrome(Request $request){
        $str = $request->input('string');
        $str = strtolower($str);
        $len = strlen($str);

        for ($i = 0; $i < $len /2; $i++){
            if($str[$i] !== $str[$len - $i -1]){
                return response()->json(false);
            }
        }

        return response()->json($len);
    }
}
