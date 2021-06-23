<?php 
include '../dbconnect.php';
include('header_links.php') ?>
 <style>
  /* Make the image fully responsive */
  /*https://t4.ftcdn.net/jpg/03/59/45/69/360_F_359456973_GNSEvX5XZC2OpuvgoXVImV6HQMLxSndZ.jpg*/
    
    .carousel-item
    {
        height: 600px;
    }
  </style>
<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./new_dashboard.php">
              <i class="fas fa-university"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./college_activity.php">
              <i class="fas fa-chalkboard-teacher"></i>
              <p>College Activity</p>
            </a>
          </li>
          <li>
            <a href="./syllabus.php">
              <i class="fas fa-file-alt"></i>
              <p>Syllabus</p>
            </a>
          </li>
          <li>
            <a href="./e-books.php">
              <i class="fas fa-book-reader"></i>
              <p>E-Books</p>
            </a>
          </li>
          <li>
            <a href="./result.php">
              <i class="fas fa-poll"></i>
              <p>Result</p>
            </a>
          </li>
          <li>
            <a href="./notifications.php">
              <i class="fas fa-bell"></i>
              <p>Notifications</p>
            </a>
          </li>

          
        </ul>
      </div>
    </div>

<?php include('navbar.php') ?>

	<div class="content">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.sgmcoe.in/assets/img/about-cllg.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.sgmcoe.in/assets/img/Capture.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://lh3.googleusercontent.com/proxy/IeGeUh4CYa4aMill06Woc7snfTv2nP1lAI_jNaHQVTL3liARbpBSn7gCYIlTl9BHaA7Pvtzdg2iAuAWqpdWrLuNzWQx9AQXlHocsThzhdcoI1pY" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
          </div>
        </div>
        
  </div>

<?php include ('footer.php'); ?>