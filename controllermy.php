<?php
include ('db.php');
$module = $_REQUEST['module'];
$actn = $_REQUEST['action'];

switch($module){
case 'group':
	switch($actn){
		case 'set':
			$qryd1="insert into tbl_group (groupId, name, description, entityId, status, dateCreated) values ('".$_REQUEST['gid']."', '".$_REQUEST['name']."', '".$_REQUEST['desc']."', '".$_REQUEST['etid']."', '".$_REQUEST['status']."', '".$_REQUEST['dcreate']."')";
			$resd1= mysql_query($qryd1)or die(mysql_error());
			
		break;
		case 'get':
			$qryd2="select groupId, name, description, entityId, status, dateCreated from tbl_group";
			$resd2= mysql_query($qryd2) or die(mysql_error());
			while($rowd2= mysql_fetch_array($resd2))
			 {
				$strin = $strin . '{"id":"'.$rowd2['groupId'].'", "name":"'.$rowd2['name'].'", "description":"'.$rowd2['description'].'", "entityId":"'.$rowd2['entityId'].'", "status":"'.$rowd2['status'].'", "dateCreated":"'.$rowd2['dateCreated'].'"},';
			 }
			
			$strin = mb_substr($strin, 0, -1);
			echo "[".$strin."]";
		break;
		case 'update':
			$qryd3="update tbl_group set name = '".$_REQUEST['nname']."' where groupId = '".$_REQUEST['']."'";
			$resd3= mysql_query($qryd3) or die(mysql_error());
			
	break;


	}

break;
case 'volunteer':
		switch($actn){
		case 'set':
			$qryv1="insert into tbl_volunteer (id, user_id, password, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId) values ('".$_REQUEST['id']."', '".$_REQUEST['uid']."', '".$_REQUEST['password']."', '".$_REQUEST['fname']."', '".$_REQUEST['lname']."', '".$_REQUEST['gender']."', '".$_REQUEST['dob']."', '".$_REQUEST['points']."','".$_REQUEST['dor']."', '".$_REQUEST['address']."', '".$_REQUEST['pointsaggre']."', '".$_REQUEST['status']."', '".$_REQUEST['datecre']."', '".$_REQUEST['roleid']."', '".$_REQUEST['groupid']."')";
			$resv1= mysql_query($qryv1)or die(mysql_error());
			
		break;
		case 'get':
			$qryv2="select id, user_id, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId  from tbl_volunteer"; 
			$resv2= mysql_query($qryv2) or die(mysql_error());
			
			while($rowv2= mysql_fetch_array($resv2))
			 {
				$strin= $strin . '{"id":"'.$rowv2['id'].'", "user_id":"'.$rowv2['user_id'].'", "password":"'.$rowv2['password'].'", "firstName":"'.$rowv2['firstName'].'", "lastName":"'.$rowv2['lastName'].'", "gender":"'.$rowv2['gender'].'", "dob":"'.$rowv2['dob'].'", "points":"'.$rowv2['points'].'", "dateOfRegister":"'.$rowv2['dateOfRegister'].'", "address":"'.$rowv2['address'].'", "pointsAggregate":"'.$rowv2['pointsAggregate'].'", "status":"'.$rowv2['status'].'", "dateCreated":"'.$rowv2['dateCreated'].'", "roleId":"'.$rowv2['roleId'].'", "groupId":"'.$rowv2['groupId'].'"},';
			 }
			 $strin = mb_substr($strin, 0, -1);

			 echo "[" . $strin . "]";
		break;
		case 'update':
			$qryv3="update tbl_volunteer set lastName = '".$_REQUEST['lname']."' where id = '".$_REQUEST['id']."'";
			$resv3= mysql_query($qryv3) or die(mysql_error());
			
	break;


	}

break;
case 'donor':
	switch($actn){
		case 'set':
			$qryg1="insert into tbl_donor (id, user_id, password, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId) values ('".$_REQUEST['id']."', '".$_REQUEST['uid']."', '".$_REQUEST['password']."', '".$_REQUEST['fname']."', '".$_REQUEST['lname']."', '".$_REQUEST['gender']."', '".$_REQUEST['dob']."', '".$_REQUEST['points']."','".$_REQUEST['dor']."', '".$_REQUEST['address']."', '".$_REQUEST['pointsaggre']."', '".$_REQUEST['status']."', '".$_REQUEST['datecre']."', '".$_REQUEST['roleid']."', '".$_REQUEST['groupid']."')";
			$resg1= mysql_query($qryg1)or die(mysql_error());
			
		break;
		case 'get':
			$qryg2="select id, user_id, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId  from tbl_donor"; 
			$resg2= mysql_query($qryg2) or die(mysql_error());
			
			while($rowg2= mysql_fetch_array($resg2))
			 {
				$strin= $strin . '{"id":"'.$rowg2['id'].'", "user_id":"'.$rowg2['user_id'].'", "password":"'.$rowg2['password'].'", "firstName":"'.$rowg2['firstName'].'", "lastName":"'.$rowg2['lastName'].'", "gender":"'.$rowg2['gender'].'", "dob":"'.$rowg2['dob'].'", "points":"'.$rowg2['points'].'", "dateOfRegister":"'.$rowg2['dateOfRegister'].'", "address":"'.$rowg2['address'].'", "pointsAggregate":"'.$rowg2['pointsAggregate'].'", "status":"'.$rowg2['status'].'", "dateCreated":"'.$rowg2['dateCreated'].'", "roleId":"'.$rowg2['roleId'].'", "groupId":"'.$rowg2['groupId'].'"},';
			 }
			 $strin = mb_substr($strin, 0, -1);

			 echo "[" . $strin . "]";
			
		break;
		case 'update':
			$qryg3="update tbl_donor set lastName = '".$_REQUEST['lname']."' where id = '".$_REQUEST['id']."'";
			$resg3= mysql_query($qryg3) or die(mysql_error());
			
	break;


	}

break;
case 'beneficiary':
	switch($actn){
		case 'set':
			$qryg1="insert into tbl_benificiary (id, beneficiary_title, location, category, amount_to_raise, summary, fund_raiser_details) values ('".$_REQUEST['id']."', '".$_REQUEST['beneficiary_title']."', '".$_REQUEST['location']."', '".$_REQUEST['category']."', '".$_REQUEST['amount_to_raise']."', '".$_REQUEST['summary']."', '".$_REQUEST['fund_raiser_details']."')";
			$resg1= mysql_query($qryg1)or die(mysql_error());
			
		break;
		case 'get':
			$qryg2="select id, beneficiary_title, location, category, amount_to_raise, summary, fund_raiser_details from tbl_benificiary"; 
			$resg2= mysql_query($qryg2) or die(mysql_error());
			
			while($rowg2= mysql_fetch_array($resg2))
			 {
				$strin= $strin . '{"id":"'.$rowg2['id'].'", "beneficiary_title":"'.$rowg2['beneficiary_title'].'", "location":"'.$rowg2['location'].'", "category":"'.$rowg2['category'].'", "amount_to_raise":"'.$rowg2['amount_to_raise'].'", "summary":"'.$rowg2['summary'].'", "fund_raiser_details":"'.$rowg2['fund_raiser_details'].'"},';
			 }
			 $strin = mb_substr($strin, 0, -1);

			 echo "[" . $strin . "]";
			
		break;
		case 'update':
			$qryg3="update tbl_beneficiary set location = '".$_REQUEST['location']."' where id = '".$_REQUEST['id']."'";
			$resg3= mysql_query($qryg3) or die(mysql_error());
			
	break;


	}



break;
case 'charityorganization':
	switch($actn){
		case 'set':
			$qryg1="insert into tbl_charity_organization (id, name, mission, media, projectscomp, contactdetail, email, incyear, location, govt_reg_no, address) values ('".$_REQUEST['id']."', '".$_REQUEST['name']."', '".$_REQUEST['mission']."', '".$_REQUEST['media']."', '".$_REQUEST['projectscomp']."', '".$_REQUEST['contactdetail']."', '".$_REQUEST['email']."', '".$_REQUEST['incyear']."', '".$_REQUEST['location']."', '".$_REQUEST['govt_reg_no']."', '".$_REQUEST['address']."')";
			$resg1= mysql_query($qryg1)or die(mysql_error());
			
		break;
		case 'get':
			$qryg2="select id, name, mission, media, projectscomp, contactdetail, email, incyear, location, govt_reg_no, address from tbl_charity_organization"; 
			$resg2= mysql_query($qryg2) or die(mysql_error());
			
			while($rowg2= mysql_fetch_array($resg2))
			 {
				$strin= $strin . '{"id":"'.$rowg2['id'].'", "name":"'.$rowg2['name'].'", "mission":"'.$rowg2['mission'].'", "media":"'.$rowg2['media'].'", "projectscomp":"'.$rowg2['projectscomp'].'", "contactdetail":"'.$rowg2['contactdetail'].'", "email":"'.$rowg2['email'].'", "incyear":"'.$rowg2['incyear'].'", "location":"'.$rowg2['location'].'", "govt_reg_no":"'.$rowg2['address'].'"},';
			 }
			 $strin = mb_substr($strin, 0, -1);

			 echo "[" . $strin . "]";
			
		break;
		case 'update':
			$qryg3="update tbl_charity_organization set location = '".$_REQUEST['location']."' where id = '".$_REQUEST['id']."'";
			$resg3= mysql_query($qryg3) or die(mysql_error());
			
	break;


	}


break;

case 'partner':
	switch($actn){
		case 'set':
			$qryg1="insert into tbl_partners (id, name, phone, business_description, company_url, custom_programs, program_name, beneficiary, program_details, contribute_volunteer, list_of_charity_association, address, email) values ('".$_REQUEST['id']."', '".$_REQUEST['name']."', '".$_REQUEST['phone']."', '".$_REQUEST['business_description']."', '".$_REQUEST['company_url']."', '".$_REQUEST['custom_programs']."', '".$_REQUEST['program_name']."', '".$_REQUEST['beneficiary']."', '".$_REQUEST['program_details']."', '".$_REQUEST['contribute_volunteer']."', '".$_REQUEST['list_of_charity_association']."', '".$_REQUEST['address']."', '".$_REQUEST['email']."')";
			$resg1= mysql_query($qryg1)or die(mysql_error());
			
		break;
		case 'get':
			$qryg2="select id, name, phone, business_description, company_url, custom_programs, program_name, beneficiary, program_details, contribute_volunteer, list_of_charity_association,address, email from tbl_partners"; 
			$resg2= mysql_query($qryg2) or die(mysql_error());
			
			while($rowg2= mysql_fetch_array($resg2))
			 {
				$strin= $strin . '{"id":"'.$rowg2['id'].'", "name":"'.$rowg2['name'].'", "phone":"'.$rowg2['phone'].'", "business_description":"'.$rowg2['business_description'].'", "company_url":"'.$rowg2['company_url'].'", "custom_programs":"'.$rowg2['custom_programs'].'", "program_name":"'.$rowg2['program_name'].'", "beneficiary":"'.$rowg2['beneficiary'].'", "program_details":"'.$rowg2['program_details'].'", "contribute_volunteer":"'.$rowg2['contribute_volunteer'].'", "list_of_charity_association":"'.$rowg2['list_of_charity_association'].'", "address":"'.$rowg2['address'].'", "email":"'.$rowg2['email'].'"},';
			 }
			 $strin = mb_substr($strin, 0, -1);

			 echo "[" . $strin . "]";
			
		break;
		case 'update':
		//	$qryg3="update tbl_charity_organization set location = '".$_REQUEST['location']."' where id = '".$_REQUEST['id']."'";
		//	$resg3= mysql_query($qryg3) or die(mysql_error());
			
	break;


	}


break;

case 'project':
	switch($actn){
		case 'set':
			$qryg1="insert into tbl_project (id, charityorg_id, project_title, target_donation, collected_donation, volunteers_required, volunteer_location, status, beneficiaries, donors, existing_partners, existing_volunteers) values ('".$_REQUEST['id']."', '".$_REQUEST['charityorg_id']."', '".$_REQUEST['project_title']."', '".$_REQUEST['target_donation']."', '".$_REQUEST['collected_donation']."', '".$_REQUEST['volunteers_required']."', '".$_REQUEST['volunteer_location']."', '".$_REQUEST['status']."', '".$_REQUEST['beneficiaries']."', '".$_REQUEST['donors']."', '".$_REQUEST['existing_partners']."', '".$_REQUEST['existing_volunteers']."')";
			$resg1= mysql_query($qryg1)or die(mysql_error());
			
		break;
		case 'get':
			$qryg2="select id, charityorg_id, project_title, target_donation, collected_donation, volunteers_required, volunteer_location, status, beneficiaries, donors, existing_partners, existing_volunteers from tbl_project"; 
			$resg2= mysql_query($qryg2) or die(mysql_error());
			
			while($rowg2= mysql_fetch_array($resg2))
			 {
				$strin= $strin . '{"id":"'.$rowg2['id'].'", "charityorg_id":"'.$rowg2['charityorg_id'].'", "project_title":"'.$rowg2['project_title'].'", "target_donation":"'.$rowg2['target_donation'].'", "collected_donation":"'.$rowg2['collected_donation'].'", "volunteers_required":"'.$rowg2['volunteers_required'].'", "volunteer_location":"'.$rowg2['volunteer_location'].'", "status":"'.$rowg2['status'].'", "beneficiaries":"'.$rowg2['beneficiaries'].'", "donors":"'.$rowg2['donors'].'", "existing_partners":"'.$rowg2['existing_partners'].'", "existing_volunteers":"'.$rowg2['existing_volunteers'].'"},';
			 }
			 $strin = mb_substr($strin, 0, -1);

			 echo "[" . $strin . "]";
			
		break;
		case 'update':
		//	$qryg3="update tbl_charity_organization set location = '".$_REQUEST['location']."' where id = '".$_REQUEST['id']."'";
		//	$resg3= mysql_query($qryg3) or die(mysql_error());
			
	break;


	}


break;



}


?>