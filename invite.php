<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CProfile.org - Welcome to the world of Charity!</title>

    <!-- jQuery UI CSS -->
    <link href="jquery-ui-1.11.1/jquery-ui.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="calendarDateInput.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">CProfile.org</a>
            </div>
 <?php include 'topNavbar.php' ?>
 <?php include 'topSidebar.php' ?>
         </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Invite</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <!-- /.panel-heading -->
				            <div class="row">
				                <div class="col-lg-12">
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                            Enter the details of your new Invitees here
				                        </div>
				                        <div class="panel-body">
				                            <form id="employeeCreate" role="form">
					                            <div class="row">
					                                <div class="col-lg-6">
				                                        <div class="form-group">
				                                            <label>First Name</label>
				                                            <input name="txtFName" class="form-control">
				                                            <p class="help-block">Example block-level help text here.</p>
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Last Name</label>
				                                            <input name="txtLName" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>EMail</label>
				                                            <input name="txtEMail" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="row">
				                                        	<div class="col-lg-6">
						                                        <div class="form-group">
						                                            <label>Date of Birth</label>
						                                           <script>DateInput('txtDateOfBirth', true, 'YYYY-MM-DD')</script>
						                                        </div>
						                                    </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Twitter</label>
				                                            <input name="txtHashtag" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Facebook</label>
				                                            <input name="txtFacebook" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Youtube URL</label>
				                                            <input name="txtYoutubeURL" class="form-control" placeholder="Enter text">
				                                        </div>
				
					                                </div>
						                            <div class="row">
						                                <div class="col-lg-12">
					                                        <div class="form-group">
						                                        <button id="butSubmit" type="button" class="btn btn-default" >Invite</button>
						                                        <button id="butReset" type="reset" class="btn btn-default">Reset Button</button>
					                                        </div>
				                                        </div>
				                                    </div>
				                                    <input type="hidden" name="txtCharityOrgId" value="1">
				                                    <input type="hidden" name="module" value="employee">
				                                    <input type="hidden" name="action" value="set">
				                                </form>
				                            </div>
				                            <!-- /.row (nested) -->
				                        </div>
				                        <!-- /.panel-body -->
				                    </div>
				                    <!-- /.panel -->
				                </div>
				                <!-- /.col-lg-12 -->
				            </div>
				            <!-- /.row -->
	                    
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
				  </div>
				  <div class="tab-pane fade active" id="tab2">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <div class="table-responsive" id="tableRowsEmployees">
	                            </div>
	                         </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
				  </div>
				  <div class="tab-pane fade active" id="tab3">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <div class="table-responsive" id="tableRowsTwitter">
	                            </div>
	                         </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
				  </div>
				</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery UI Version 1.11.0 -->
    <script src="jquery-ui-1.11.1/jquery-ui.js"></script>

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
