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
        </nav>
        <div id="lPannel" class="col-lg-2"></div>
		<div id="content" class="col-lg-8">
			<div class="row">
				<div class="panel panel-default" style="background-color:#e9e9e9;">
					<div id="divUserName" class="col-xs-5 line panel-heading"><h3>Mr. Joel<h3/><hr></div>
					<div class="col-lg-2 logo panel-heading">
								<a href="#" class="thumbnail">
									<img src="images/p8.jpg" width="100%" height="100%">
								</a>
					</div>
					<div class="col-lg-5 line panel-heading"><h3><img src="images/gold.png" width="25"  size="25" /><img src="images/gold.png" width="25"  size="25" /><h3/><hr></div>
				</div>
				<div class="col-lg-12 myCont" style="padding:20px 45px 20px 45px">
					<legend><h3>Summary <button class="btn" onclick="fnEdit(this,$('#divSummary'))"><span class="glyphicon glyphicon-edit"></span></button></h3></legend>
					<div id="divSummary">
						Over 10 years of overall IT industry experience. 
						� Expertise in Technical Architecture and Structured software development with hands-on experience in Object Oriented design using Industry standard principles (SOLID) and Design Patterns.
						� Expertise in Software Architecture/Design and Full Product Life cycle development.
						� Excellent understanding of Design Patterns and Algorithms.
						� Excellent understanding of Scrum and Agile methodologies for SDLC.
						� Excellent understanding of Project Management from Software development perspective.
						� Proficiency and expertise in leading development teams through successful delivery of software components within resources, budget and time.
						� Proven track record of meeting even challenging mile stones on or before time.
						� Excellent Expectation Management skills throughout software development life cycle.
						� Highly detail oriented and passionate about Software Architecture and Design.
						� Excellent Analytical and Problem solving skills.
						� Deterministic self-starter, comfortable within a challenging environment as individual and within team.
						� Excellent Interpersonal, Communication and Mentoring skills.
						� Areas of expertise includes Enterprise Architecture Planning, Meaningful Use Business Intelligence, Global IT Operations, Systems Integration and Emerging Technologies
						� Domain experience in Healthcare (EMR, PMS, Hospital Automation, Analytics, Meaningful Use) and Financial Services (US Micro Lending)
					</div>
				</div>
				<hr/>
				<div>
					<div class="col-lg-5 myCont" style="padding:20px 45px 20px 45px">
						<legend><h3>Skills <button class="btn" onclick="fnEdit(this,$('#divSkills'))"><span class="glyphicon glyphicon-edit"></span></button></h3></legend>
						<div id="divSkills">
							<ul class="list-group">
								<li class="list-group-item">Strategic IT expertise</li>
								<li class="list-group-item">Legal knowledge</li>
								<li class="list-group-item">Strategic planning and thinking</li>
								<li class="list-group-item">Health & Safety</li>
								<li class="list-group-item">Marketing</li>
								<li class="list-group-item">Leadership experience and expertise</li>
								<li class="list-group-item">Others</li>
							</ul>
						</div>
					</div>
					<div class="myCont col-lg-7" style="padding:20px 45px 20px 45px">
						<legend><h3>Contributions List</h3></legend>
						<ul class="list-group">
							<li class="list-group-item">To Purple Proj1:BundleD    <color = "red"><b>@34 | <i>1 Day ago</i> | <span class="glyphicon glyphicon-thumbs-up"></span><a href="#" onclick="fnPopUp('userLike')" data-toggle="modal" data-target="#myModal">6</a></b></color></li>
							<li class="list-group-item">To Purple Proj1:BundleC    <color = "red"><b>@22 | <i>1 Day ago</i> | <span class="glyphicon glyphicon-thumbs-up"></span><a href="#" onclick="fnPopUp('userLike')" data-toggle="modal" data-target="#myModal">0</a></b></color></li>
							<li class="list-group-item">To Purple Proj1:BundleB    <color = "red"><b>@14 | <i>1 Day ago</i> | <span class="glyphicon glyphicon-thumbs-up"></span><a href="#" onclick="fnPopUp('userLike')" data-toggle="modal" data-target="#myModal">0</a></b></color></li>
							<li class="list-group-item">To Purple Proj1:BundleA    <color = "red"><b>@4 | <i>1 Day ago</i> | <span class="glyphicon glyphicon-thumbs-up"></span><a href="#" onclick="fnPopUp('userLike')" data-toggle="modal" data-target="#myModal">0</a></b></color></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="myCont" style="padding:45px">
					<legend><h3>Following Companies</h3></legend>
						<div class="row">
							<div class="col-lg-3">
								<a href="#" class="thumbnail">
									<img src="images/c1.jpg" width="100%" height="100%">
								</a>
							</div>
							<div class="col-lg-3">
								<a href="#" class="thumbnail">
									<img src="images/c2.jpg" width="100%" height="100%">
								</a>
							</div>
							<div class="col-lg-3">
								<a href="#" class="thumbnail">
									<img src="images/c3.jpg" width="100%" height="100%">
								</a>
							</div>
							<div class="col-lg-3">
								<a href="#" class="thumbnail">
									<img src="images/c4.jpg" width="100%" height="100%">
								</a>
							</div>
						</div>
				</div>
				<hr>
			</div>
		</div>
		<div id="rPannel" class="col-lg-2"></div>
<script>
	$(function(){
		ajax({url:'controller.php',callBack:'getUser',data:'module=donar&action=get&id=1'});	
	});
</script>