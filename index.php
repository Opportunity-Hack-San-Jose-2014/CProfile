<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <TITLE> Purple </TITLE>
	<link href="css/custom.css" rel="stylesheet">
	<link href="jquery-ui-1.11.1/jquery-ui.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="jquery-ui-1.11.1/jquery-ui.css" rel="stylesheet">
	<link href="jquery-ui-1.11.1/jquery-ui.theme.css" rel="stylesheet">
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="jquery-ui-1.11.1/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script>
/*	var frm = {
		Logn:{lPannel:false,rPannel:false,body:''},
		'form2',
		'form3',
		'form4',
		'form5',
		'form6' 
}*/

/*var elements = {
	name:{label:'Name',type:'text',name:'name',required:true,maxlength:20,dType:'Mname'},
	pwd:{label:'Password',type:'password',name:'pwd',required:true,dType:'password'},
	userId:{label:'User Id',type:'text',placeHolder:'User Name',name:'User Id',required:true,maxlength:'70',dType:'email'},
	submit:{type:'Submit',name:'sub',value:'Submit'}
}

var frmElemMap = {
'Login.body':[{narration:'row',fields:['userId']},{narration:'row',fields:['pwd']},{narration:'row',fields:['submit']}],
'SignUp.body':['FirstName','LastName','Gender',''],
'SignUp.body':['FirstName','LastName','Gender',''],

}

function loadHeader(){
	ajax({url:'header.html',callBack:'header'});
}
function loadPage(oFrm){
	loadHeader();
	var pageFrame = ['header','lPannel','body','rPannel','footer'];
	ajax({url:'header.html'});
	for(lpI=0;lpI<pageFrame.length;lpI++){
		if(frmElemMap[oFrm+'.'+pageFrame[lpI]]){
			setPageComponents(oFrm+'.'+pageFrame[lpI]);
		}
	}
}

function setPageComponents(oFrmPageFrame){
	oFrmPageFrame = oFrmPageFrame.split('.');
	var oFrm = oFrmPageFrame[0];
	var pageFrame = oFrmPageFrame[1];
	myFrm = '';
	var myFields = new Array();
	for(i=0;i<frmElemMap[oFrm+'.'+pageFrame].length;i++){

		currFields = frmElemMap[oFrm+'.'+pageFrame][i].fields;
		for(j=0;j<currFields.length;j++){
			currElem = currFields[j];
			if(j==0){
				myFields[i] = '';
				myFrm += '<div class="'+frmElemMap[oFrm+'.'+pageFrame][i].narration+'">';
			}
			alert('Before : '+myFields[i]);	
			myFields[i] = buildForm(frmElemMap[oFrm+'.'+pageFrame][i].narration,myFields[i],elements[currElem]);
			alert('After : '+myFields[i]);	
			myFrm += myFields[i];

		}
		//myFrm = '<div class="'+frmElemMap[oFrm+'.'+pageFrame][i].narration+'">'+myFields[i]+'</div>';
		///myFrm += '<tr><td><b>'+currElem.label+'</b></td><td>'+myElem+'</td></tr>';

	}
	document.getElementById(pageFrame).innerHTML =  myFrm;
}

function elemPicker(myElemObj){
			myElem = '';
			switch(myElemObj.type){
				case 'text':
					myElem += '<input type="text" name="'+myElemObj.name+'"  maxLength="'+myElemObj.maxlength+'" required="'+myElemObj.required+'" dType="'+myElemObj.dType+'" class="form-control">';
				break;
				case 'password':
					myElem += '<input type="password" name="'+myElemObj.name+'"  maxLength="'+myElemObj.maxlength+'" required="'+myElemObj.required+'" dType="'+myElemObj.dType+'" >';
				break;
				case 'select':
				break;
				case 'submit':
					myElem += '<input type="submit" name="'+myElemObj.name+'" value="'+myElemObj.value+'">';
				break;
			}
		return myElem;
}
function buildForm(oNarrator,myFormObj,myElemObj){
	switch(oNarrator){
			case 'row':	
				myFormObj += '<div class="form-group">';
				myFormObj += '	<label for="'+myElemObj.id+'">'+myElemObj.label+'</label>';
				myFormObj += '	'+elemPicker(myElemObj);
				myFormObj += '</div>';
			break;
			case 'col':
			break;
		}
			return myFormObj;
	}


*/
function loadPage(oFrm){
	if(oFrm == undefined || oFrm.module == undefined){
		ajax({url:'login.html',callBack:'loadLogin',module:'login'});	
	} else if(oFrm.module=='SignUp'){
		ajax({url:'signup.html',callBack:'loadLogin',module:'login'});	
	}
}

window.resData = '';
function ajax(oAjx){
	$.ajax({
	  url: oAjx.url,
	  data:oAjx.data,
	  type:'POST'
	}).done(function(data) {
	//	alert(statusCode);
			 
	window.resData = data;
		callBack(oAjx.callBack);
	}).fail(function(data) {
		
		//alert( "error");
	}).always(function() {
	    //alert( "complete" );
	});
}

function callBack(oFunction){
	switch(oFunction){
		case 'header':
			$('#header').html(window.resData);
		break;
		case 'loadLogin':
			$('#header').hide();
			$('#container').html(window.resData);
		break;
		case 'login':
			$('#header').hide();
			if($('#userId').val().indexOf('purple.com')>-1){
				ajax({url:'index.php?u='+$('#userId').val(),callBack:'loadInbox',module:'inbox'});				
			} else {
				ajax({url:'index.php?u='+$('#userId').val(),callBack:'loadInbox',module:'inbox'});
			}
		break;
		case 'getUser':
			$('#header').show();
			//$('#divUserName').html('<h3>'+window.resData.name+'<h3/>');
		break;
		case 'signUpDonar':
			$('#header').hide();
			fnPopUp('signUpDonar');
		break;
		case 'signupDonarSet':
			loadPage();
		break;
		case 'signUpOrg':
			$('#header').hide();
			fnPopUp('signUpOrg');
		break;
		case 'signUpOrgSet':
			loadPage();
		break;
		case 'charitySet':
			loadPage();
		break;
		case 'loadInbox':
			/*$('#header').show();
			$('#container').html(window.resData);*/
			location.href = 'index.php';
		break;
		case 'body':
			$('#body').html(window.resData);
		break;
		case 'rPannel':
			$('#rPannel').html(window.resData);
		break;
		case 'footer':
			$('#footer').html(window.resData);
		break;
	}
}

function fnEdit(imgObj,targetObj){
	if($(imgObj).find('span').attr('class').indexOf('edit') > -1){
		$(imgObj).find('span').attr('class', 'glyphicon glyphicon-check');
		$(targetObj).attr('contenteditable','true');
		$(targetObj).focus();
	} else {
		$(targetObj).attr('contenteditable','false');
		$(imgObj).find('span').attr('class', 'glyphicon glyphicon-edit');
	}
}

function fnPopUp(oCont){
	switch(oCont){
		case 'userLike':
		popUpCont = '';
		popUpCont += '<ul>'+
		'<ul class="list-group">'+
		'	<li class="list-group-item"><img src="images/p2.jpg" width="50" height="50"> Venkat</li>'+
		'	<li class="list-group-item"><img src="images/p3.jpg" width="50" height="50"> Sukanth David</li>'+
		'	<li class="list-group-item"><img src="images/p4.jpg" width="50" height="50"> Stella</li>'+
		'	<li class="list-group-item"><img src="images/p5.jpg" width="50" height="50"> Satyajeeth</li>'+
		'	<li class="list-group-item"><img src="images/p6.jpg" width="50" height="50"> Sarah</li>'+
		'</ul>';
		$('#modal-body').html(popUpCont);
		$('#myModalLabel').html('<span class="glyphicon glyphicon-thumbs-up"></span> Likes');
		break;
		case 'signUpDonar':
			$('#modal-body').html(window.resData);
			$('#myModalLabel').html('SingUp - Donor/Volunteer');
		break;
		case 'signUpOrg':
			$('#modal-body').html(window.resData);
			$('#myModalLabel').html('SingUp - Organization');
		break;
	}
}
</script>
 
 </HEAD>

 <BODY onload="loadPage()" style="background-color:#e9e9e9;background:url(images/bg.png)">
	<div class="container-fluid">
		<div id="header">
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#"><img src="images/cprofile_logo_136x88_t.png"></a>-->
				  <h3>CProfile</h3>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="headerTools" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <form class="navbar-form navbar-left" role="search">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				  </form>
				  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>  <span class="glyphicon glyphicon-circle-arrow-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="main.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
					<!--<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					  </ul>
					</li>-->
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>	
		</div>
		<div id="container">
		</div>
	</div>
	<!-- Button trigger modal -->
<!--<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div id="modal-body" class="modal-body">
        ...
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
 </BODY>
</HTML>
