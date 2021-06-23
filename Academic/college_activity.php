<?php 
include '../dbconnect.php';
include('header_links.php') ?>

<style type="text/css">
    #navbarNavAltMarkup a
    {
        font-size: 18px;
        color: black;
    }

    #lectures
    {
        margin-top: 50px;
        height: 450px;
        width: 500px;
        overflow: auto;
    }

    #lectures .well
    {
        border: 1px solid black;
        width: 450px;
        padding: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    #notes_div .well
    {
        font-size: 20px;
        padding: 5px;
        cursor: pointer;
    }

    #notes_div .well:hover
    {
        color: blue;
    }

    .background
{
  height: 800px;
}

.selectSubject
{
  /*margin-bottom: 30px;
  margin-top: 30px;*/
  background-color: white;
  margin: 30px 20px;
  height: 250px;
  padding: 5px 0px 5px 20px;
}

.selectSubject #navbarDropdownMenuLink
{

  width: 150px;
  background-color: skyblue;
  color: black;
  margin-left: 20px;
}

#activity_nav
{
    margin-bottom: 0px;
    border-radius: 10px;
}

#activity_nav a
{
    font-weight: bold;
    margin-right: 60px;
}

#college_activity_card
{
    border: 1px solid black;
}

#college_activity_card .card-footer
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
          <li class="active ">
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
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card" class="background" style="background-image: url('../img/g3.jpg');
              /*background-repeat: no-repeat;*/ background-size: cover; height: 400px;">
              <!--https://thumbs.dreamstime.com/t/trendy-attractive-young-woman-wearing-mustard-color-summer-dress-posing-over-pastel-blue-background-front-view-smiling-woman-117620629.jpg-->
              <div class="row">
                  <!-- <div class="col-sm-1"></div> -->
                  <div class="col-md-5">
                      <div class="selectSubject">
                          <h1>Learn on your schedule</h1>
                          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Subject
                          </a>
                          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">DS</a>
                            <a class="dropdown-item" href="#">BME</a>
                            <a class="dropdown-item" href="#">EC</a>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card " id="college_activity_card">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-light bg-light" id="activity_nav">
                <!-- <a class="navbar-brand" href="#">Upload</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" id="upload" href="#">Upload <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#" id="history">History</a>
                    <a class="nav-item nav-link" href="#" id="notes">Notes</a>
                    <a class="nav-item nav-link" href="#" id="assignments">Assignments</a>
                    <a class="nav-item nav-link" href="#" id="tests">Test</a>
                  </div>
                </div>
              </nav>
              <!-- Navbar End-->

              <!-- Upload -->
              <div class="card-body " id="upload_div">
                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
                    <div class="container">
                      <div class="embed-responsive embed-responsive-4by3">
                        <video width="900" height="400" controls>
                          <source src="../videos/demo.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- History -->
              <div class="card-body " id="history_div" style="display: none;">
                <div class="row">
                  <!--  <div class="col-sm-1"></div> -->
                  <div class="col-sm-6">
                    <div class="container">
                      <div class="embed-responsive embed-responsive-4by3">
                        <video width="320" height="240" controls>
                          <source src="../videos/demo.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="container" id="lectures">
                      <div class="well">1. T1</div>
                      <div class="well">2. T1</div>
                      <div class="well">3. T1</div>
                      <div class="well">4. T1</div>
                      <div class="well">1. T1</div>
                      <div class="well">2. T1</div>
                      <div class="well">3. T1</div>
                      <div class="well">4. T1</div>
                      <div class="well">1. T1</div>
                      <div class="well">2. T1</div>
                      <div class="well">3. T1</div>
                      <div class="well">4. T1</div>
                      <div class="well">1. T1</div>
                      <div class="well">2. T1</div>
                      <div class="well">3. T1</div>
                      <div class="well">4. T1</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Notes -->
              <div class="card-body " id="notes_div" style="display: none;">
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="well">
                          <p><i class="fas fa-folder fa-2x"></i>&nbsp;&nbsp;
                             Chapter 1</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="well">
                          <p><i class="fas fa-folder fa-2x"></i>&nbsp;&nbsp;
                             Chapter 1</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="well">
                          <p><i class="fas fa-folder fa-2x"></i>&nbsp;&nbsp;
                             Chapter 1</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Assignments -->
              <div class="card-body " id="assignments_div" style="display: none;">
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-6">
                    <div class="container">
                      <h3>Submit an Assignment</h3>
                      <form>
                        <div class="row">
                          <div class="col-sm-12" style="font-size: 20px;">
                              <label>Title</label>
                              <input type="text" name="" class="form-control">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-sm-12" style="font-size: 20px;">
                              <label>Select a file</label>
                              <input type="file" name="" class="form-control">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="update ml-auto mr-auto" style="font-size: 20px;">
                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                          </div>
                        </div>
                  
                        
                      </form>
                    </div>
                  </div>
                </div>
                <br><br><br><br><br><br>
                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
                    <div class="container">
                      <h3>Previous Upload</h3>
                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>Title</th>
                            <th>File</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Test 1</td>
                              <td>github.txt</td>
                              <td><button class="btn btn-primary">Delete</button></td>
                            </tr>
                            <tr>
                              <td>Test 2</td>
                              <td>github.txt</td>
                              <td><button class="btn btn-primary">Delete</button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tests -->
              <div class="card-body " id="tests_div" style="display: none;">
                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                      <div class="container">
                        <h3>Attend The Test</h3>
                        <div class="table-responsive">
                          <table class="table">
                            <thead class=" text-primary">
                              <th>Title</th>
                              <th>Button</th>
                              <th>Marks</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Test 1</td>
                                <td><button class="btn btn-primary">Start Test</button></td>
                                <td>30</td>
                              </tr>
                              <tr>
                                <td>Test 2</td>
                                <td><button class="btn btn-primary">Start Test</button></td>
                                <td>25</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

              <!-- Card footer -->
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
              <!-- Card footer End -->

            </div>
          </div>
        </div>

      </div>
<?php include('footer.php') ?>

  <script type="text/javascript">
      
      $('#upload').click(function(){
          $('#upload_div').show();
          $('#notes_div').hide();
          $('#assignments_div').hide();
          $('#tests_div').hide();
          $('#history_div').hide();
      });

      $('#history').click(function(){
          $('#upload_div').hide();
          $('#notes_div').hide();
          $('#assignments_div').hide();
          $('#tests_div').hide();
          $('#history_div').show();
      });

      $('#notes').click(function(){
          $('#upload_div').hide();
          $('#notes_div').show();
          $('#assignments_div').hide();
          $('#tests_div').hide();
          $('#history_div').hide();
      });

      $('#assignments').click(function(){
          $('#upload_div').hide();
          $('#notes_div').hide();
          $('#assignments_div').show();
          $('#tests_div').hide();
          $('#history_div').hide();
      });

      $('#tests').click(function(){
          $('#upload_div').hide();
          $('#notes_div').hide();
          $('#assignments_div').hide();
          $('#tests_div').show();
          $('#history_div').hide();
      });
  </script>
</body>

</html>
