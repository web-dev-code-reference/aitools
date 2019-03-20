<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Code;
use App\Codetype;

class BarcodegeneratorController extends Controller
{
    //

    public function barcode(Request $request)
    {

        // dd($request);
        if(!isset($request->barcode_val)){ $request->barcode_val="1234567890";}
        if(!isset($request->width)){  $request->width = 4;}
        if(!isset($request->height)){  $request->height =124; }
        if(!isset($request->bcode_type)){  $request->bcode_type = '5'; }

        $bcode_type = Code::find($request->bcode_type);
        $bcode_type_name = Code::find($request->bcode_type)->name;
        $bcode_type_id = Code::find($request->bcode_type)->id;
        
        // Attach list of Barcode options
        $codes = Code::orderBy('name', 'asc')->get();
        
        // return Codetype::find(1)->desc;




        //session collection
        Session::flash('bcode_width', $request->width);
        Session::flash('bcode_height', $request->height);
        Session::flash('bcode_val', $request->barcode_val);
        Session::flash('bcode_type_name', $bcode_type_name);
        Session::flash('bcode_type_id',  $bcode_type_id);
        // Session::flash('bcode_type_id', $bcode_type_id );


        return view('barcode/barcodegenerator')->with('codes',$codes)->with('bcode_type', $bcode_type_name )->with('bcode_type_id',$bcode_type_id)->with('width', $request->width)->with('height', $request->height)->with('barcode_val', $request->barcode_val);
    }
}
