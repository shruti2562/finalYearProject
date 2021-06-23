<?php 
include '../dbconnect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <style type="text/css">
        body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 300px;
    max-width: 300px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -300px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

.container-fluid
{
    margin: 15px;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -300px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}

#companies .well
        {
            height: 60px;
            padding: 5px;
            margin: 40px 10px 30px 10px;
            cursor: pointer;
            box-shadow: 1px 0px 5px 1px white;
        }

#companies .well:hover {
    background: #fff !important;
    color: blue !important;
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
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Choose Your Target</h3>
            </div>

            <!-- <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul> -->


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

        </nav>

        <!-- Page Content  -->
        <div id="content">

                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>

                <div class="row" id="compete">
                    <div class="col-sm-12">
            <div id="google">
                <div class="row">
                <div class="col-sm-6">
                    <div class="well" onclick="window.open(
  'https://codingcompetitions.withgoogle.com/hashcode',
  '_blank');">
                        <img src="https://images.all-free-download.com/images/graphicthumb/apple_computer_cup_desk_hand_iphone_laptop_macbook_597556.jpg" style="width: 100%; height: 80%;">
                        <h5 style="font-family: 'Dela Gothic One', cursive; font-weight: 300; margin-top: 5px;">Hash Code</h5>
                        <p style="color: black; font-family: 'Open Sans', sans-serif;">Registration Close Date: 24-06-2021</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <div class="well">
                        <img src="http://3.bp.blogspot.com/--1hg5cxXrqM/UzVLqekjMNI/AAAAAAAADgQ/nuVLm-JMRn0/s1600/Programmers+Wallpapers+HD+by+PCbots.jpg" style="width: 100%; height: 80%;">
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

            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
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