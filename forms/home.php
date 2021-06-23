<?php 
include '../dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<style type="text/css">
    body
    {
       background-image: url('../img/home_background.jpg');
       /*background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)) ,url('../img/home_background.jpg');*/
       background-repeat: no-repeat;
       background-size: cover;
       /*background-position: center;*/
       height: 100vh;
       backdrop-filter: blur(2px);
    }

     @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
.view,body,html{height:100%}
.navbar{background-color:rgba(0,0,0,.2)}
.page-footer,.top-nav-collapse{background-color:#1C2331}
@media only screen and (max-width:768px){
  .navbar{background-color:#1C2331}
}

  #home_title
  {
      font-family: 'Roboto Slab', serif;
      color: white;
      word-spacing: 0.12em;
      padding-top: 120px;
      height: 50px;
      padding-left: 0px;
  }

  #home_divs
  {
      /*padding-left: 20px;*/
      padding-top: 120px;
      background-color: transparent;
  }

  /*#academic, #unacademic
  {
      border: 1px solid white;
  }*/


  .play_section {
    display: flex;
    align-items: center;
   /* padding-top: 20px;*/
}

.play_button {
    display: flex;
    justify-content: center;
    width: 50px;
    height: 50px;
    margin-right: 20px;
    background: rgba(228, 55, 95, 1);
    border-radius: 50%;
    animation: pulse 2s infinite;
    cursor: pointer;
}

.play_button img {
    width: 13px;
}

.play_section p{
    font-family: "PT Sans", sans-serif;
    font-size: 18px;
    color: #ecf0f1;
    text-decoration: none;
}

#academic
{
    margin-right: 40px;
    margin-left: 20px;
}
#academic, #unacademic
{
    height: 200px;
    padding-top: 70px;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
    border-radius: 10px;
    background: rgba(255,255,255,0.1);
    overflow: hidden;
    justify-content: center;
    align-items: center;
    border-top: 1px solid rgba(255,255,255,0.5);
    border-left: 1px solid rgba(255,255,255,0.5);
    /*backdrop-filter: blur(10px);*/
    text-align: center;
    transition: 0.5s;
    /*transform: translateY(30px);*/
   /* opacity: 0;*/
  
 
}

.jumbotron h4
{
    color: red;
      font-size: 2em;
      filter: blur(.6px);
      font-weight: 300;
      text-shadow: 0 0 10px rgba(255,255,255,1),
                   0 0 20px rgba(255,255,255,1),
                   0 0 40px rgba(255,255,255,1),
                   0 0 80px rgba(255,255,255,1),
                   0 0 160px rgba(255,255,255,1);
                       letter-spacing: 0.04em;
}

#academic:hover, #unacademic:hover
{
    /*transform: translateY(0px);*/
    transform: scale(1.1);
    opacity: 1;
    padding-top: 20px;
}

#academic:hover p, #unacademic:hover p
{
    display: block;
    transition: 1s;
}
/*.jumbotron h2
{
  position: absolute;
  top: -80px;
  right: 30px;
  font-size: 20px;
  color: rgba(255,255,255,0.05);
  pointer-events: none;
}
.jumbotron p
{
    font-size: 18px;
    color: white;
    z-index: 1;
}*/


.jumbotron .para
{
  display: none;
  padding: 10px;
  color: white;
  font-size: 16px;
}

#navbarSupportedContent
{
    margin-left: 90px;
}

#navbarSupportedContent a
{
    margin-right: 40px;
    font-size: 18px;
}

.ml3
{
    color: white;
    font-weight: 300;
    font-size: 1.5em;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0px rgba(228, 55, 95, 0.7);
    }
    100% {
        box-shadow: 0 0 0 15px rgba(228, 55, 95, 0);
    }
}
</style>
</head>
<body>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-body">
        <video controls id="video1" style="width: 100%; height: auto; margin:0 auto; frameborder:0;">
          <source src="../videos/Ice.mp4" type="video/mp4">
          Your browser doesn't support HTML5 video tag.
        </video>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" id="home_nav">
    <div class="container" style="margin: 0px;">

      <!-- Brand -->
      <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
        <strong>Edukid</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="localhost/Final Year Project/forms/home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Academic/college_activity.php">Academic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="unacademic.php">Unacademic</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          
          <!-- <li>
              <div class="play_section">
                <div id="play" class="play_button" data-toggle="modal" data-target="#myModal">
                  <img src="../img/play.svg" alt="Play Button">
                </div>
              </div>
          </li> -->

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle border border-light rounded" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="student_login.php">Student</a>
                  <a class="dropdown-item" href="teacher_login.php">Teacher</a>
                  <a class="dropdown-item" href="clgAdmin_login.php">College Co-ordinator</a>
              </div>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  
  <div class="container" id="home_title">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <center><h4 class="ml3">Do Something For Today That Your Future Self Will Thank You For</h4></center>
          <!-- <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                  <div class="play_section">
            <div id="play" class="play_button" data-toggle="modal" data-target="#myModal">
              <img src="../img/play.svg" alt="Play Button">
            </div>
            <p>Watch Why We're Better</p>
          </div>
              </div>
          </div> -->
        </div>
      </div>  
  </div>

  <div class="jumbotron" id="home_divs">
      <div class="row">
          <div class="col-sm-2" id="academic">
              <h4>Academic</h4>
              <p class="para">Make E-learning Sounds Like It's A Conversation Between Teachers & Students</p>
          </div>
          
          <div class="col-sm-2" id="unacademic">
              <h4>Unacademic</h4>
              <p class="para">Dreams Don't Work Unless You Do</p>
          </div>
      </div>
      <br><br><br><br>
      <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">
            <div class="play_section">
              <div id="play" class="play_button" data-toggle="modal" data-target="#myModal">
                <img src="../img/play.svg" alt="Play Button">
              </div>
              <p style="color: blue;">Watch Why We're Better</p>
            </div>
          </div>
      </div>
  </div>

  <script type="text/javascript">
      $('#myModal').on('shown.bs.modal', function () {
          $('#video1')[0].play();
      })
      $('#myModal').on('hidden.bs.modal', function () {
          $('#video1')[0].pause();
      })

//       var textWrapper = document.querySelector('.ml3');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({loop: true})
//   .add({
//     targets: '.ml3 .letter',
//     opacity: [0,1],
//     easing: "easeInOutQuad",
//     duration: 2250,
//     delay: (el, i) => 150 * (i+1)
//   })
//   .add({
//     targets: '.ml3',
//     opacity: 0,
//     duration: 100,
//     easing: "easeOutExpo",
//     delay: 100,
//   });
  </script>
</body>
</html>

<!-- Teachers open the door, but you must enter by yourself -->