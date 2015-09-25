<html>

<head>
    <title>realUS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <body>

      <?php

      if($_POST['test']) {
        echo "Clicked button";
      }


      ?>

        <style>
        li {
            display: inline;
        }
        
        div {
            display: block;
        }
        
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            background-color: #FF0000;
            color: #FF0000;
        }
        
        .btn:hover {
            background-image: none !important;
            background-color: "#FF0000" !important;
        }
        
        .nav-pills a {
            color: white;
        }
        
        .custom > li > a:hover {
            background-color: green;
        }
        
        #sign-up-view {
            margin-bottom: 107px;
        } 
        .content {
          margin-left: auto;
          margin-right: auto;
          table-layout: fixed;
          border-collapse: collapse;
          z-index: -1; position:relative
        }

        .submitButton {
          color: black;
          font-family:Trebuchet MS;
        }
        </style>
        <nav style="background-color:transparent" class="navbar navbar-transparent">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" class="btn btn-default btn-lg">
                        <span class="icon-bar"></span>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="file:///Users/suleiman/Desktop/buttons/index2.html?#">
                        <font color="white" size="6" face="Trebuchet MS">real<b>us</b></font>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <button style="background-color:brown" type="submit" class="btn btn-default">
                                <font color="white" face="Trebuchet MS">Submit</font>
                            </button>
                        </form>
                    </ul>
                    <ul class="nav nav-pills" style="Padding-Top: 12px">
                        <li role="presentation"><a href="file:///Users/suleiman/Desktop/buttons/index3.html?#">Contact Us</a></li>
                        <li role="presentation"><a href="#">My Tree</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <style>
        body {
            background: #90EE90 url("sunriseF.jpg") no-repeat scroll;
            background-size: 100% 100%;
            min-height: 700px;
        }
        </style>
        <br>
        <br>
        <br>
        <div class="container" id="sign-up-view">
            <font face="cursive" size="6" color="white">Sign Up!
                <br>
            </font>
            <form method="post">
            <font face="Trebuchet MS" size="4" color="lightgrey">Username</font>
            <div class="input-group" style="width: 400px">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" name="username" class="form-control" placeholder="BobCanBuild" aria-describedby="basic-addon1">
            </div>
            <br>
            <font face="Trebuchet MS" size="4" color="lightgrey">Email</font>
            <div class="input-group" style="width: 400px">
                <input type="text" name="email" class="form-control" placeholder="BobtheBuilder" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">@example.com</span>
            </div>
            <br>
            <font face="Trebuchet MS" size="4" color="lightgrey">Password</font>
            <div class="input-group" style="width: 400px">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" name="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <br>
            <input id="submitButton" name="submit" type="submit" value="Sign up" class="btn btn-default" />
          </form>
        </div>

      <div class="container">
        <font face="cursive" size="3" color="white">...and get sharing!<br></font>
        <a href="https://www.facebook.com"><img src="fb.png" alt="facebook" height="30px" width="32px" style="Padding-Left: 0px"></a>
        <a href="https://www.twitter.com"><img src="twitter.png" alt="twitter" height="30px" width="32px" style="Padding-Left: 0px"></a>
        <a href="https://www.plus.google.com"><img src="google.png" alt="google plus" height="30px" width="32px" style="Padding-Left: 0px"></a>
      </div> 

    </body>

</html>