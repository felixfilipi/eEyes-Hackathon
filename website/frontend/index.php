<!DOCTYPE html>
<html lang="en">
  
<head>
<title>e-Eyes</title>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="js/index.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark navbar-static-top">
<a class="navbar-brand" href="index.php">e-Eyes</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="index.php">HOME</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about.php">ABOUT</a>
</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="#"><img src="logout.png" width=20px height=20px></img>LOGOUT</a>
</li>
</ul>
</div>
</nav>

<div class="container">
  <img src="techbg.jpg" alt="Background" style="width:100%; height:350px;">
  <div class="centered"><h1><b>e-Eyes</b></h1></div>
</div>

<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
      <a href="camerastream.php">
          <div class="card bg-primary text-white rounded-lg">
            <img src="camera.png" class="card-img-top mx-auto d-block" style="width:140px;" alt="camera-stream">
            <div class="card-body">
              <h5 class="card-title text-white">Camera Stream</h5>
              <p class="card-text text-white">Streaming camera in real-time</p>
			  <p class="card-text text-primary">Some quick example text to build on the card title and</p>
            </div>
          </div>
      </a>
      <a href="database.php">
      <div class="card d-none d-md-block bg-warning rounded-lg">
	  <br>
        <img src="database.png" class="card-img-top mx-auto d-block" style="width:140px; height:152px" alt="database">
        <div class="card-body">
          <h5 class="card-title text-white">Database</h5>
          <p class="card-text text-white">View data from database</p>
		  <p class="card-text text-warning">Some quick example text to build on the card title and</p>
        </div>
      </div>
      </a>
      <a href="scanresult.php">
        <div class="card d-none d-md-block bg-info rounded-lg">
          <img src="scan.png" class="card-img-top mx-auto d-block" style="width:140px;" alt="scan-result">
          <div class="card-body">
            <h5 class="card-title text-white">Scan Result</h5>
            <p class="card-text text-white">View scan result on the day</p>
			<p class="card-text text-info">Some quick example text to build on the card title and</p>
          </div>
        </div>
      </a>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <a href="training.php">
          <div class="card bg-primary text-white rounded-lg">
            <img src="training.png" class="card-img-top mx-auto d-block" style="width:140px;" alt="training">
            <div class="card-body">
              <h5 class="card-title text-white">Training</h5>
              <p class="card-text text-white">Start training the data</p>
			  <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
      </a>
      <a href="downloadrecording.php">
        <div class="card d-none d-md-block bg-success rounded-lg">
		<br>
          <img src="download.png" class="card-img-top mx-auto d-block" style="width:140px; height:144px;" alt="download-recording">
          <div class="card-body mt-2">
            <h5 class="card-title text-white">Download Recording</h5>
            <p class="card-text text-white">Download your recording</p>
			<p class="card-text text-success">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    
<div class="jumbotron text-center text-white bg-dark" style="margin-bottom:0">
  <p>Copyright ©2021</p>
</div>

</body>
</html>