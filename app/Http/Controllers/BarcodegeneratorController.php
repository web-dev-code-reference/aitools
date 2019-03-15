<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodegeneratorController extends Controller
{
    //
    public function barcode(Request $request)
    {

        // dd($request->all());

        $bcode_type = $request->bcode_type;
        return view('barcode/barcodegenerator')->with('bcode_type', $bcode_type)->with('width', $request->width)->with('height', $request->height);
    }
}
