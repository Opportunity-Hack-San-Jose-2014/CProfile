<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CProfile.org - Welcome to the world of Charity!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

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
                    <h1 class="page-header">Donations Center</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div id="paypal">
				<div id="paypalDonate">
					<tr>
						<td width="25%" valign="top">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
							">
							<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<!-- 							<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
							</form>
						</td>
						<td width="25%" align="left" valign="top">
							<object id="pingbox5v6yi9hcmg400" type="application/x-shockwave-flash" data="http://wgweb.msg.yahoo.com/badge/Pingbox.swf" width="240" height="420">
							<param name="movie" value="http://wgweb.msg.yahoo.com/badge/Pingbox.swf" />
							<param name="allowScriptAccess" value="always" />
							<param name="flashvars" value="wid=M.Nx15.uUHG8ed4XjpSXNOI-" /></object>
						</td>
					</tr>
				</div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive" id="tableRowsProjects">
                            </div>
                         </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
				</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
<script>
function paypal() {
	alert("Hello");
	//document.getElementById('paypal').innerHTML='';
	$("paypal").show();
}
function f1() {

}
</script>

<script>
	function getEmployees(paramDiv, paramPageId) {
		var reqData = 'p='+paramPageId;
		var fbPostHtml = '';
		//alert(reqData);
		$.ajax({
			  url: "http://www.cprofile.org/searchProj.php",
			  data: reqData
			}).done(function (respData) {
				eval('respData='+respData, 'javascript');
				for (i=0; i<respData.length; i++) {
					//alert(fbPosts['data'][i]['message']);
					fbPostHtml = fbPostHtml + '<tr>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['project_title']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['target_donation']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['collected_donation']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['location']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['start_date']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['end_date']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['skills']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['hashTag']+'</td>';					
					fbPostHtml = fbPostHtml + '</tr>';
				}
				fbPostHtml = '<table class="table">'
	                +'<thead>'
	                +'<tr>'
	                +'<th>Project Title</th>'
	                +'<th>Target Donation</th>'
	                +'<th>Collected</th>'
	                +'<th>Location</th>'
	                +'<th>Start</th>'
	                +'<th>End</th>'
	                +'<th>Skills</th>'
	                +'<th>Twitter</th>'
	                +'</tr>'
	                +'</thead>'
	                +'<tbody>'
	                +fbPostHtml
	                +'</tbody>'
	            	+'</table>';
				//alert(fbPostHtml);
				document.getElementById(paramDiv).innerHTML = fbPostHtml;
			});
	}

	getEmployees('tableRowsProjects','');

</script>
