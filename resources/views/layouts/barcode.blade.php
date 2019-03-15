<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>




<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container pt-5">
  <div class="jumbotron">
		<h1>Barcode Generator</h1> 
		<p>An amazing tool for everybody</p> 
  </div>
  @yield('content')
</div>

</body>
</html>
