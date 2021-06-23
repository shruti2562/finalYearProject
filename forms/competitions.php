<?php 
include '../dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Competitions</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		#target
		{
			/*padding: 5px;*/
			
			box-shadow: 0px 2px 0px 0px #888888;
			margin-bottom: 40px;
		}

		#companies .well
		{
			height: 60px;
			padding: 5px;
			margin: 10px 10px 30px 10px;
			cursor: pointer;
			box-shadow: 1px 0px 5px 1px #888888;
		}

		#companies .well img
		{
			height: 50px;
			width: 50px;
		}

		#companies .well span
		{
			font-size: 20px;
		}

		#google, #microsoft, #hackerrank, #hackerearth
		{
			margin-top: 70px;
			display: none;
			padding-left: 50px;
		}

		#google .well, #microsoft .well, #hackerrank .well, #hackerearth .well
		{
			width: 500px;
			height: 290px;
			/*border: 1px solid black;*/
			padding: 10px;
			cursor: pointer;
			background-color: white;
			box-shadow: 1px 0px 5px 1px grey;
			margin-bottom: 50px;
			border-radius: 5px;
		}

		#google .well:hover, #microsoft .well:hover, #hackerrank .well:hover, #hackerearth .well:hover
		{
			background-color: #dae0e57a;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">Edukid</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavDropdown">
    		<ul class="navbar-nav">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Academic</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Unacademic</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Contact Us</a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Login
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="#">Student</a>
          				<a class="dropdown-item" href="#">Teacher</a>
          				<a class="dropdown-item" href="#">College Co-ordinator</a>
        			</div>
      			</li>
    		</ul>
  		</div>
	</nav>

	<div class="row" style="margin: 0px 0px 10px 0px; height: 91vh">
		<div class="col-sm-3" style="box-shadow: 0px 0px 0px 2px #888888;">
			<div class="row" id="target">
				<h4 style="padding: 10px;">Choose Your Target</h4>
			</div>
			<div class="row" id="companies">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<div class="well" id="g">
								<img src="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png"> 
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span>Google</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<div class="well" id="m">
								<img src="https://media-exp1.licdn.com/dms/image/C560BAQH8hBKOFXvqag/company-logo_200_200/0/1609783110976?e=2159024400&v=beta&t=GMDgC8GGqQZemMwGsR3zGWxrV-z62f50TiCY-K9iT_8">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span>Microsoft</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<div class="well" id="hr">
								<img src="http://info.hackerrank.com/rs/487-WAY-049/images/Podcast-ChannelCover-Final.jpg">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span>Hackerrank</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<div class="well" id="he">
								<img src="https://paganresearch.io/images/Hackerearth.jpg">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span>Hackerearth</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div id="google" style="padding: 35px;">
				<div class="row">
				<div class="col-sm-6">
					<div class="well" onclick="window.open(
  'https://codingcompetitions.withgoogle.com/hashcode',
  '_blank');">
						<img src="">
						<h5>Hash Code</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
			</div>
			</div>

			<div id="microsoft">
				<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>mic Code</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
			</div>

			<div id="hackerrank">
				<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>HR Code</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
			</div>

			<div id="hackerearth">
				<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>HE Code</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="well">
						<img src="">
						<h5>Code Jam</h5>
						<p>Registration Close Date: </p>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('#g').click(function(){
			$('#microsoft').hide();
			$('#hackerrank').hide();
			$('#hackerearth').hide();
          	$('#google').show();
      	});

      	$('#m').click(function(){
      		$('#google').hide();
      		$('#hackerrank').hide();
			$('#hackerearth').hide();
          	$('#microsoft').show();
      	});

      	$('#hr').click(function(){
      		$('#google').hide();
          	$('#microsoft').hide();
          	$('#hackerearth').hide();
          	$('#hackerrank').show();
      	});

      	$('#he').click(function(){
      		$('#google').hide();
          	$('#microsoft').hide();
          	$('#hackerrank').hide();
          	$('#hackerearth').show();
      	});
	</script>
</body>
</html>