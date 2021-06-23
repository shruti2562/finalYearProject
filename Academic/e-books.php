<?php 
include '../dbconnect.php';
include('header_links.php') ?>
<style type="text/css">
    .card-body p
    {
        font-size: 16px;
    }
    .card-body .container
    {
        margin-bottom: 5px;
    }
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
          <li>
            <a href="./syllabus.php">
              <i class="fas fa-file-alt"></i>
              <p>Syllabus</p>
            </a>
          </li>
          <li class="active ">
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

                    <h3>Library of around 200 books...</h3>
                  
                </div>

                <div class="card-body ">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="well">
                            <div class="container">
                                <img src="../img/bg.jpg">
                            </div>
                            <center><p>Background</p></center>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="well">
                            <div class="container">
                                <img src="../img/bg.jpg">
                            </div>
                            <center><p>Background</p></center>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="well">
                            <div class="container">
                                <img src="../img/bg.jpg">
                            </div>
                            <center><p>Background</p></center>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="well">
                            <div class="container">
                                <img src="../img/bg.jpg">
                            </div>
                            <center><p>Background</p></center>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="fa fa-history"></i> Book is your best friend
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
<?php include('footer.php') ?>
