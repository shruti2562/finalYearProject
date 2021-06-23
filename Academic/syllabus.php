<?php 
include '../dbconnect.php';
include('header_links.php') ?>
<style type="text/css">
    .card-footer
{
    font-size: 16px;

}
</style>
<div class="sidebar-wrapper">
        <ul class="nav">
          <li>
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
          <li class="active ">
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
      <!-- End Navbar -->
      <div class="content">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">

                  <h3>Get the overview of semester before you start...</h3>
                  
                </div>

                <div class="card-body ">
                  <!-- <div class="embed-responsive embed-responsive-16by9">
                    <center><iframe src="../docs/Syllabus 26 Sessions.pdf" class="embed-responsive-item" width="90%" height="1000px" style="border-radius: 10px;">
                    </iframe></center>
                  </div> -->
                  <center><object data="../docs/Syllabus 26 Sessions.pdf" style="width: 90%; height: 800px;">     
                  </object></center>    
                </div>


                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="fa fa-history"></i> Time is money
                  </div>
                </div>
            </div>
          </div>
        </div>
        
      </div>
<?php include('footer.php') ?>
