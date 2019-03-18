<!-- barcodegenerator.blade.php --> 


@extends('layouts.main')

@section('page-title')
  Barcode Generator
@stop()

@section('page-description')
  A tool for generating barcode images
@stop()

@section('content')
  <form method="get" action="{{route('barcode.generator')}}" >
  {{csrf_field()}}


  <div class="row">
    <div class="col col-md-6">
      <div class="form-group ">
        <label for="barcode" style="visibility:">Value</label>
        <input type="text" value="{{ Session::get('bcode_val')}}"  class="form-control" id="barcode" name="barcode_val" required>
      </div>
    </div>
    <div class="col col-md-6">
    <div class="form-group">
      <label for="sel1">Select Barcode Type:</label>
      <select class="form-control" id="sel1" name="bcode_type" required>
        <option >{{ Session::get('bcode_type')}}</option>
        <option >C128</option>
        <option>C39</option>
        <option>C39+</option>
        <option>C39E</option>
        <option>C39E+</option>
        <option>C93</option>
        <option>S25</option>
        <option>S25+</option>
        <option>I25</option>
        <option>I25+</option>
        <option >C128</option>
        <option>C128A</option>
        <option>C128B</option>
        <option>C128C</option>
        <option>EAN2</option>
        <option>EAN5</option>
        <option>EAN8</option>
        <option>EAN13</option>
        <option>UPCA</option>
        <option>UPCE</option>
        <option>MSI</option>
        <option>MSI+</option>
        <option>POSTNET</option>
        <option>PLANET</option>
        <option>RMS4CC</option>
        <option>KIX</option>
        <option>IMB</option>
        <option>CODABAR</option>
        <option>CODE11</option>
        <option>PHARMA</option>
        <option>PHARMA2T</option>
      </select>
    </div>
    </div>
  </div>
   
  <div class="row">
    <div class="col col-md-6">
      <div class="form-group">
      <label for="height">Height</label>
      <input type="number" value="{{ Session::get('bcode_height')}}"  step="0.01" class="form-control" id="height" name="height"  max="124" >
      </div>
    </div>
    <div class="col col-md-6">
      <div class="form-group">
      <label for="width">width</label>
      <input type="number" value="{{ Session::get('bcode_width')}}"  placeholder=""  step="0.01" class="form-control" id="width" name="width"   max="4.4"  >
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col col-md-12 float-right">
      
        <button type="submit" id="submit" class="btn btn-primary btn-lg float-right">Generate</button>
      <br>
      <br>
    </div>
  </div>
  </form>

<br><br>

  <div class="row">
    <div class="col col-md-12">
      <div class="card">
        <div class="card-body">
          <h4>Click the Barcode to Download</h4>
          <hr><br>
          <div class="row">
          <div class="col col-md-3" style="background-color: antiquewhite;">
          <b>Barcode Type:</b> {{ Session::get('bcode_type')}} <br>
          <b>Barcode Value:</b> {{ Session::get('bcode_val')}} <br>
          <b>Barcode Width:</b> {{ Session::get('bcode_width')}} <br>
          <b>Barcode Width:</b> {{ Session::get('bcode_height')}} <br>
          <button  onclick="document.getElementById('123').click()" type="button" class="btn btn-outline-primary btn-sm float-right">Download</button><br><br>
          </div>
          <div class="col col-md-9">
          <center>
          @php
            if(!isset($barcode_val)){ $barcode_val="12345";}
            if(!isset($width)){  $width = 3;}
            if(!isset($height)){  $height = $width * 10;}
            
            echo '
            <a id="123" href="data:image/png;base64,' . DNS1D::getBarcodePNG("$barcode_val", "$bcode_type", number_format($width, 2),number_format($height, 2) ) . '" download="'.$barcode_val.'">
            <img  src="data:image/png;base64,' . DNS1D::getBarcodePNG("$barcode_val", "$bcode_type", number_format($width, 2),number_format($height, 2) ) . '" alt="barcode" />
            </a>';
            

          @endphp 
          </center>
          </div>
          </div>
        </div>
      </div>

    </div>
  </div>


 
@stop()
