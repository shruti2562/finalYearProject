<?php 
include '../dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Interview Preparation</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body
  	{
  		background-color: #d3e0dc;
  	}
  	/*#top-nav{
  		background-color: transparent;
  	}*/
  	.nav-item
  	{
  		margin-left: 50px;
     /*padding-right: 60px;*/
       margin-right: 30px;
        float: center;
  	}
  	
  	#main
  	{
  		background-color: #111;
  		height: 250px;
  		box-shadow: 5px 1px 5px 8px grey;
  		justify-content: center;
  		align-items: center;
		  padding: 20px 20px;
			flex-wrap: wrap;
  	}
    #main #q,#main #v 
    {
    	position: relative;
			/*width: 320px;*/
			height: 120px;
			/*color: white;*/
			background: #111;
			display: flex;
			justify-content: center;
			align-items: center;
			/*margin: 20px 30px;*/
			transition: 0.5s;
		}
		#main #q:hover, #v:hover
		{
			transform: scale(1.1);
		}
		#main #q::before, #v::before
		{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(45deg,#ffbc00,#ff0058);
		}
		#main #q::after, #v::after
		{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(45deg,#ffbc00,#ff0058);
			filter: blur(30px);
		}
		#main #q span, #v span
		{
			position: absolute;
			top: 6px;
			left: 6px;
			right: 6px;
			bottom: 6px;
			background: rgb(0,0,0,0.6);
			z-index: 2;	
		}
		#main #q span::before, #v span::before
		{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 50%;
			height: 100%;
			background: rgba(255,255,255,0.1);
			pointer-events: none;
		}
		#main #q h4, #v h4
		{
			z-index: 10;
			position: relative;
			padding: 20px 40px;
			cursor: pointer;
		}


  	#video
  	{
  		margin-top: 30px;
  		height: 500px;
  	}
  	#video-content
  	{
  		margin-top: 50px;
  		margin-bottom: 40px;
  	}


  	#quizzes
  	{
  		height: 350px;
  	 }
  	
  	#q, #v
  	{
  		/*margin-top: 50px;*/
  		background-color: #2125296e;
  		height: 100px;
  		text-align: center;
  		/*padding-top: 30px;*/
  		box-shadow: 2px 3px 3px 2px black;
  		color: white;
  		border-radius: 8px;
  	}
  </style>
</head>
<body>

	<div class="row" id="main">
		<!-- <div class="col-sm-1"></div> -->
		<div class="col-sm-8">
			<div class="row">
				<!-- <div class="col-sm-1"></div> -->
				<div class="col-sm-5" id="q">
					<span></span>
					<h4>Practise Quizzes</h4>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5" id="v">
					<span></span>
					<h4>Get Preapred for Interview</h4>
				</div>
			</div>
		</div>
	</div>

                          <!-- Practise Quizzes section -->
	<div class="row" id="quizzes">
		<div class="col-sm-12">
		  <!-- <div class="well"> -->
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="top-nav">
                <ul class="navbar-nav">
  	               <li class="nav-item active">
                     <a class="nav-link" href="#" id="general-nav" style="font-weight: bold; font-family: Snell Roundhand; letter-spacing: 0.1em; font-size: 20px;">General</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#" id="quant-nav" style="font-weight: bold; font-family: Snell Roundhand; letter-spacing: 0.1em; font-size: 20px;">Quantitative Appttitude</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#" id="logical-nav" style="font-weight: bold; font-family: Snell Roundhand; letter-spacing: 0.1em; font-size: 20px;">Logical Reasoning</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#" id="verbal-nav" style="font-weight: bold; font-family: Snell Roundhand; letter-spacing: 0.1em; font-size: 20px;">Verbal Ability</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#" id="program-nav" style="font-weight: bold; font-family: Snell Roundhand; letter-spacing: 0.1em; font-size: 20px;">Programming</a>
                   </li>
                </ul>
            </nav>
            <!-- General -->
            <div class="row" id="General">
            	<div class="col-sm-12">
            		<div class="container">
            			<div class="row" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" id="first" style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					General 1
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 18px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					General 2
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					General 3
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					General 4
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>

            <!-- Quant -->
            <div class="row" id="Quant">
            	<div class="col-sm-12">
            		<div class="container">
            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Quant 1
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 18px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Quant 2
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Quant 3
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Quant 4
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>

            <!-- Logical -->
            <div class="row" id="Logical">
            	<div class="col-sm-12">
            		<div class="container">
            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Logical 1
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 18px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Logical 2
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Logical 3
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Logical 4
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>

            <!-- Verbal -->
            <div class="row" id="Verbal">
            	<div class="col-sm-12">
            		<div class="container">
            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Verbal 1
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 18px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Verbal 2
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Verbal 3
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Verbal 4
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>

            <!-- Programming -->
            <div class="row" id="Programming">
            	<div class="col-sm-12">
            		<div class="container">
            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Programming 1
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 18px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Programming 2
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Programming 3
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>

            			<div class="row" id="first" style="margin-top: 50px; height: 80px; border-radius: 8px; box-shadow: 3px 0px 3px 3px grey; ">
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5"  style="padding-top: 25px; font-size: 20px; font-weight: bold;">
            					Programming 4
            				</div>
            				<div class="col-sm-1"></div>
            				<div class="col-sm-5" style="padding-top: 25px;">
            					<input type="button" name="Take test" value="Take Test" style="background-color: orange; height: 40px; border-radius: 5px; width: 100px;">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
   <!-- </div> -->
		</div>
	</div>

	            <!-- Get prepared for interview section -->

	<div class="row" id="video">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="well">
				<div class="row" id="video-content">
					<div class="col-sm-4">
						<div class="embed-responsive embed-responsive-21by9">
                         <iframe width="500" height="300" src="https://www.youtube.com/embed/gnqzM6FWgTE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
					</div>
					<div class="col-sm-4">
						<div class="embed-responsive embed-responsive-21by9">
                         <iframe width="500" height="300" src="https://www.youtube.com/embed/Ji46s5BHdr0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
					</div>
					<div class="col-sm-4">
						<div class="embed-responsive embed-responsive-21by9">
                         <iframe width="500" height="300" src="https://www.youtube.com/embed/EzGH3hZuJVk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4">
						<div class="embed-responsive embed-responsive-21by9">
                         <iframe width="500" height="300" src="https://www.youtube.com/embed/Ix9msJx9e5s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
					</div>
					<div class="col-sm-4">
						<div class="embed-responsive embed-responsive-21by9">
                         <iframe width="500" height="300" src="https://www.youtube.com/embed/ZOLCMa2QbdE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
					</div>
					<div class="col-sm-4">
						<div class="embed-responsive embed-responsive-21by9">
                         <iframe width="500" height="300" src="https://www.youtube.com/embed/WG93W4Mll0M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
					</div>
				</div>

			</div>
		</div>
	</div>


<script type="text/javascript">
$(function () 
{
    $("#quizzes, #video").hide();  
    $("#q").bind("click", function () 
    {

      $("#video").hide();
      $("#quizzes").show();        
    });

    $("#v").bind("click", function ()
    {

      $("#quizzes").hide();
      $("#video").show();        
    });

   //Quizzes section 
   $("#General, #Quant, #Logical, #Verbal, #Programming").hide();
   $("#general-nav").bind("click",function()
   {
   	$("#Quant,#Logical, #Verbal, #Programming").hide();
   	$("#General").show();
   });

   $("#quant-nav").bind("click",function()
   {
   	$("#General,#Logical,#Verbal, #Programming").hide();
   	$("#Quant").show();
   });

   $("#logical-nav").bind("click",function()
   {
   	$("#General, #Quant, #Verbal, #Programming").hide();
   	$("#Logical").show();
   });

   $("#verbal-nav").bind("click",function()
   {
   	$("#General, #Quant, #Logical, #Programming").hide();
   	$("#Verbal").show();
   });

   $("#program-nav").bind("click",function()
   {
   	$("#General, #Quant, #Logical, #Verbal").hide();
   	$("#Programming").show();
   });

});
</script>

</body>
</html>