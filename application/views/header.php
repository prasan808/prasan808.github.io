<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');  ?>" />
	 
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light">
   <a class="navbar-brand" href="#">
    <img src="<?= base_url('assets/images/logo.png');?>" width="150px" height="90px" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="#">DIP Stock <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li class="nav-item ">
        <a class="nav-link" href="#">User name |<span class="sr-only"></span></a>

      </li>
      <li> <a class="nav-link" href="#">Date |<span class="sr-only"></span></a></li>
       <li> <a class="nav-link" href="#">Time<span class="sr-only"></span></a></li>
    </ul>
    
  </div>
</nav>
</div>


</body>
</html>