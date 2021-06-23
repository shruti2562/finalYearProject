<?php 
include '../dbconnect.php';
include('header_links.php') ?>
<style type="text/css">
    .card-body
    {
        height: 400px;
        background-image: url('https://1.cms.s81c.com/sites/default/files/2020-02-04/push-notifications-LS.jpg');
        background-repeat: no-repeat;
        background-size: cover;
       /* background: #6ddccf;*/
    }
    .card-body .container
    {
        border: 1px solid white;
        margin: 10px 10px 20px 10px;
        /*height: 100px;*/
        border-radius: 8px;
        color: white;
        font-size: 16px;
      }
    /*.card-body #notify-img
    {
      border: 1px solid black;
       background-image: url('../img/3.jpg');
       height: 490px;
        background-repeat: no-repeat;
        background-size: cover;
    }*/
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
          <li>
            <a href="./result.php">
              <i class="fas fa-poll"></i>
              <p>Result</p>
            </a>
          </li>
          <li class="active ">
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

                <div class="card-body ">
                    <div class="row">
                        <!-- <div class="col-sm-4" id="notify-img">
                            
                        </div> -->
                        <!-- <div class="col-sm-1"></div> -->
                        <div class="col-sm-6">
                            <div class="container">
                              Submit assignment before 3pm.
                            </div>
                    
                            <div class="container">
                              Submit assignment before 3pm.
                            </div>
                        </div>
                    </div>
                </div>

             

                <!-- <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="fa fa-history"></i> Just Now
                  </div>
                </div> -->
            </div>
          </div>
        </div>
      </div>
<?php include('footer.php') ?>
