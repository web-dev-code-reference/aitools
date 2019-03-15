<!-- barcodegenerator.blade.php --> 


@extends('layouts.barcode')

@section('content')
   <form action="{{route('barcode.generator')}}" method="Post">
      {{csrf_field()}}
      <div class="row">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="height">Height</label>
                <input type="number" value="124" class="form-control" id="height" name="height" requiredjjh>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="form-group">
                <label for="width">width</label>
                <input type="number" value="5.2" class="form-control" id="width" name="width" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-md-6">
            <div class="form-group">
               <label for="sel1">Select Barcode Type:</label>
               <select class="form-control" id="sel1" name="bcode_type" required>
                  <option>C39</option>
                  <option>C39+</option>
                  <option>C39E</option>
                  <option>C39E+</option>
                  <option>C93</option>
                  <!-- <option>S25</option> -->
                  <!-- <option>S25+</option> -->
                  <!-- <option>I25</option> -->
                  <!-- <option>I25+</option> -->
                  <option selected>C128</option>
                  <!-- <option>C128A</option> -->
                  <option>C128B</option>
                  <!-- <option>C128C</option> -->
                  <!-- <option>EAN2</option> -->
                  <!-- <option>EAN5</option> -->
                  <!-- <option>EAN8</option> -->
                  <!-- <option>EAN13</option> -->
                  <!-- <option>UPCA</option> -->
                  <!-- <option>UPCE</option> -->
                  <!-- <option>MSI</option> -->
                  <!-- <option>MSI+</option> -->
                  <!-- <option>POSTNET</option> -->
                  <!-- <option>PLANET</option> -->
                  <option>RMS4CC</option>
                  <option>KIX</option>
                  <option>IMB</option>
                  <!-- <option>CODABAR</option> -->
                  <!-- <option>CODE11</option> -->
                  <!-- <option>PHARMA</option> -->
                  <option>PHARMA2T</option>
               </select>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="form-group ">
                <label for="barcode" style="visibility:">Value</label>
                <input type="text" placeholder="Enter Value Here" class="form-control" id="barcode" name="value" required>
                
            </div>
        </div>

    </div>
   

      <center>
         <button type="submit" id="submit" class="btn btn-primary btn-lg">Submit</button>
      </center>
 
  
 
   </form>
   <br>
   <hr>
   <center>
      @php
         $barcode_val="skr181001";
         $barcode_type="C128";
         //old dimension 5.2,125
         echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("$barcode_val", $bcode_type ,$width,$height,array(1,1,1), true) . '" alt="barcode"   />';
      @endphp 
   </center>
   <hr>
@stop()
