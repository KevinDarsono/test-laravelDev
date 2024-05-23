<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SwapCaseController extends Controller
{
    public function swapCase(Request $request)
    {
        $string = $request->input('string');

        $swappedString = '';
        for ($i = 0; $i < strlen($string); $i++) {
            if (ctype_upper($string[$i])) {
                $swappedString .= strtolower($string[$i]);
            } elseif (ctype_lower($string[$i])) {
                $swappedString .= strtoupper($string[$i]);
            } else {
                $swappedString .= $string[$i];
            }
        }

        return response()->json($swappedString);
    }
}
