<!DOCTYPE html>
<html>
<head>
	<title>Job Notification</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../js/bootstrap.min.js">
	<script src="../js/jquery.js" type="text/javascript"></script>
	<style type="text/css">
		body
		{
			background-image: url('../img/portal.jpeg');
			background-repeat: no-repeat;
			background-size: cover;
			padding-bottom: 10px;

		}

	   #sidebar
	   {
	      background: inherit;
	      border-radius: 5px;
	      box-shadow: inset 0 0 0 500px rgba(255,255,255,0.6);
	   	  height: 95vh;
	      margin-left: 25px;
	      margin-top: 10px;
	      padding-top: 180px;

	   }
	   #On-Campus, #Off-Campus
	   {
	   	  height: 80px;
	   	  font-size: 20px;
	   	 font-weight: bolder;
	   	 padding-top: 15px;
	   	 padding-bottom: 20px;
	   	 cursor: pointer;
	   	 box-shadow: 0 0 10px;
	   }
	   #on, #off
	   {
	   	background-color: white;
	   	height: 95vh;
	   	margin-left: 25px;
	   	margin-top: 10px;
	   	border-radius: 5px;
	   	overflow-y: auto;
	   }
	   #year1,#year2,#year3,#year4,#off_year1,#off_year2,#off_year3,#off_year4
	   {
	   	margin-top: 70px;
	   	color: black;
	   }
	   #on_campus1, #on_campus2, #off_campus1, #off_campus2
	   {

	   	/*margin-left: 30px;*/
	   	/*margin-right: 25px;*/
	   	margin-top: 20px;
	   	margin-bottom: 20px;
	   	height: 250px;
	   	box-shadow: 4px 4px 20px;
	   	padding-top: 10px;
	   	/*padding-left: 30px;*/
	   }
	   #on_campus1 button, #on_campus2 button, #off_campus1 button, #off_campus2 button
	   {
         margin-top: 30px;
         height: 40px;
         width: 100px;
         border:none;
         border-radius: 8px;
         background-color: #bbbbbb;
	   }
	   #on_campus1 button:hover, #on_campus2 button:hover, #off_campus1 button:hover, #off_campus2 button:hover
	   {
	   	background-color: #435560;
	   	color: white;
	   }


	   /* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: white;
  color: black;
}

/* Style the tab content (and add height:100% for full page content) */
/*.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
*/


/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


	</style>
</head>

<body>
	   <div class="row">
		<div class="col-sm-3" id="sidebar">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8" id="On-Campus">
					<center>On-Campus Drive</center>
				</div>
			</div>
			<br><br><br>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8" id="Off-Campus">
					<center>Off-Campus Drive</center>
				</div>
			</div>
		</div>

		<div class="col-sm-8" id="on">
		  <div class="row">
		    <button class="tablink" id="first">2021</button>
            <button class="tablink" id="second">2020</button>
            <button class="tablink"id="third">2019</button>
            <button class="tablink" id="fourth">2018</button>

             <div id="year1" class="tabcontent">
                <div class="row">
                	<!-- <div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Amazon Job</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                    <div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div> -->
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
              </div>

             <div id="year2" class="tabcontent">
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
             </div>


             <div id="year3" class="tabcontent">
             	<div class="row">
             		<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
             </div>

             <div id="year4" class="tabcontent">
             	<div class="row">
             		<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="on_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="on_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
             </div>
		  </div>
		</div>


       <!-- off campus -->


		<div class="col-sm-8" id="off">
		  <div class="row">
		    <button class="tablink" id="off_first">2021</button>
            <button class="tablink" id="off_second">2020</button>
            <button class="tablink"id="off_third">2019</button>
            <button class="tablink" id="off_fourth">2018</button>

             <div id="off_year1" class="tabcontent">
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
              </div>

             <div id="off_year2" class="tabcontent">
             <div class="row">
             	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div> 
             </div>

             <div id="off_year3" class="tabcontent">
             	<div class="row">
             		<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
             </div>

             <div id="off_year4" class="tabcontent">
             	<div class="row">
             		<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
                <br>
                <div class="row">
                	<div class="col-sm-1"></div>
                	<div class="col-sm-5" id="off_campus1">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                	<div class="col-sm-5" id="off_campus2">
                		<h1>Title</h1>
                		<h3>Eligibility : </h3>
                		<center><button>Apply here</button></center>
                	</div>
                </div>
             </div>
		  </div>
		</div>
    </div>



	<script type="text/javascript">
		$(function () 
        {
        	$("#on, #off").hide();
        	$("#On-Campus").bind("click", function () 
            {
               $("#off").hide();
               $("#on").show();        
            }); 

            $("#Off-Campus").bind("click", function () 
            {
               $("#on").hide();
               $("#off").show();        
            }); 
        });


    $("#year1, #year2, #year3, #year4").hide();
   $("#first").bind("click",function()
   {
   	$("#year2, #year3, #year4").hide();
   	$("#year1").show();
   });

   $("#year1, #year2, #year3, #year4").hide();
   $("#second").bind("click",function()
   {
   	$("#year1, #year3, #year4").hide();
   	$("#year2").show();
   });

   $("#year1, #year2, #year3, #year4").hide();
   $("#third").bind("click",function()
   {
   	$("#year1, #year2, #year4").hide();
   	$("#year3").show();
   });

   $("#year1, #year2, #year3, #year4").hide();
   $("#fourth").bind("click",function()
   {
   	$("#year1, #year2, #year3").hide();
   	$("#year4").show();
   });


      // off campus 

    $("#off_year1, #off_year2, #off_year3, #off_year4").hide();
   $("#off_first").bind("click",function()
   {
   	$("#off_year2, #off_year3, #off_year4").hide();
   	$("#off_year1").show();
   });

   $("#off_year1, #off_year2, #off_year3, #off_year4").hide();
   $("#off_second").bind("click",function()
   {
   	$("#off_year1, #off_year3, #off_year4").hide();
   	$("#off_year2").show();
   });

   $("#off_year1, #off_year2, #off_year3, #off_year4").hide();
   $("#off_third").bind("click",function()
   {
   	$("#off_year1, #off_year2, #off_year4").hide();
   	$("#off_year3").show();
   });

   $("#off_year1, #off_year2, #off_year3, #off_year4").hide();
   $("#off_fourth").bind("click",function()
   {
   	$("#off_year1, #off_year2, #off_year3").hide();
   	$("#off_year4").show();
   });
 </script>


     

</body>
</html>