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
          <li class="active ">
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

                  <h3>Wish You All The Best...</h3>
                  
                </div>

                <div class="card-body ">
                    <center><iframe src="http://14.139.121.222/studentresult/" width="90%" height="800px" style="border:1px solid black;">
                    </iframe></center>
                </div>


                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="fa fa-history"></i> Congratulations
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>
<?php include('footer.php') ?>
