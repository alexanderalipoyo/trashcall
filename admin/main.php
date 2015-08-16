<!DOCTYPE html>
<html lang="en">
<head>
    <title>TrashCall</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true"></script>
    <script type="text/javascript" src="js/maps.js"></script>
    <style type="text/css">
        #map {
        height: 300px;
        width: 100%;
      }
    </style>
    <script>
        function moveNumbers()
        {
            var no=document.getElementById("no");
            var txt=document.getElementById("result").value;
            txt=txt + option;
            document.getElementById("result").value=txt;
        }
    </script>
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                
                </button>
                <a class="navbar-brand" href="index.html">TrashCall</a>
            </div>
            <!-- /.navbar-header -->

          <nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand navbar-right page-scroll " href="#page-top">
                <span class="light"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    
                         <li>
                        <a class="page-scroll" href="../index.php">VIEW AS USER</a>
                        </li>
                        <li>
                        <a class="page-scroll" href="../index.php">LOGOUT</a>
                    </li>
                    </li>
                </ul>
            </div>
     
        </div>
    </nav>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Create Station<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Station Lists</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Status</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Garbage Station</h1>

                    <div class="row">
                        <div class="col-lg-6">

                            <div id="map"></div>   

                        </div>
                        <div class="col-lg-6">
                            <form action="submit.php" role="form" method="post">
                                <div class="form-group">
                                    <label>Schedule of Garbage Throwing (from - to)</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="time" name="timeFrom" class="form-control">
                                            <p class="help-block">from</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="time" name="timeTo" class="form-control">
                                            <p class="help-block">to</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Day Collection</label>
                                            <input type="text" name="day" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Discharge Time</label>
                                            <input type="time" name="discharge" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Latitude</label>
                                            <input type="text" name="lat" id="lat" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Longitude</label>
                                            <input type="text" name="lng" id="lng" class="form-control">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initialize"
        async defer>
    </script>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

