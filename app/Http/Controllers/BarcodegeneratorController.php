<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class BarcodegeneratorController extends Controller
{
    //
    public function barcode(Request $request)
    {

        if(!isset($request->barcode_val)){ $request->barcode_val="alexies1234567890";}
        if(!isset($request->width)){  $request->width = 4;}
        if(!isset($request->height)){  $request->height =124; }
        if(!isset($request->bcode_type)){  $request->bcode_type = 'C128';}

        Session::flash('bcode_width', $request->width);
        Session::flash('bcode_height', $request->height);
        Session::flash('bcode_val', $request->barcode_val);
        Session::flash('bcode_type', $request->bcode_type);


        return view('barcode/barcodegenerator')->with('bcode_type', $request->bcode_type)->with('width', $request->width)->with('height', $request->height)->with('barcode_val', $request->barcode_val);
    }
}
