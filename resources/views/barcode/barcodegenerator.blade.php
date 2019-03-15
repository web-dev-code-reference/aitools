<!-- barcodegenerator.blade.php --> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Barcode Generator Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   </head>
<body>
   <h2>Laravel Barcode Generator Tutorial With Example</h2><br/>
<div class="container text-center">
<h2>One-Dimensional (1D) Barcode Types</h2><br/>
   <!-- <div>{!!DNS1D::getBarcodeHTML(8889899, 'C39')!!}</div></br>
   <div>{!!DNS1D::getBarcodeHTML(5436564, 'S25')!!}</div></br>
   <div>{!!DNS1D::getBarcodeHTML(77656765, 'I25')!!}</div></br>
   <div>{!!DNS1D::getBarcodeHTML(6435636, 'MSI+')!!}</div></br>
   <div>{!!DNS1D::getBarcodeHTML(25547, 'POSTNET')!!}</div></br> -->
   <!-- <div>{!!DNS1D::getBarcodeHTML("sskr181001", 'C128',5,125)!!}</div></br> -->

@php
    echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("skr181001", "C128",5.2,125,array(1,1,1), true) . '" alt="barcode"   />';
@endphp 

 </div>
</body>
</html>