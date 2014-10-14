<?php

include 'db.php';

$module =  $_REQUEST['module'];
$actn = $_REQUEST['action'];

switch($module){
	case 'login':
			echo '{"success":"true"}';
		break;
	case 'project':
			switch($actn){
				case 'set':
				$qryg1="insert into tbl_project (project_title, target_donation, details, start_date, end_date, facebook, hashTag, volunteers_required, skills, location, video_url, image) 
						values ('".$_REQUEST['txtTitle']."', '"
								.$_REQUEST['txtFundsRequired']."', '"
								.$_REQUEST['txtDetails']."', '"
								.$_REQUEST['txtStartDate']."', '"
								.$_REQUEST['txtEndDate']."', '"
								.$_REQUEST['txtFacebook']."', '"
								.$_REQUEST['txtHashtag']."', '"
								.$_REQUEST['txtVolunteersRequired']."', '"
								.$_REQUEST['txtSkillsRequired']."', '"
								.$_REQUEST['txtLocation']."', '"
								.$_REQUEST['txtYoutubeURL']."', '".$filename1."')";				
				$resg1= mysql_query($qryg1)or die(mysql_error());
				echo $qryg1;	
				break;
			}
		break;
	case 'employee':
			switch($actn){
				case 'set':
				$qryg1="insert into tbl_employee (fname, lname, emailId, date_of_birth, charityorg_id, details, start_date, facebook, hashTag, skills, location, years_experience, video_url) 
						values ('".$_REQUEST['txtFName']."', '"
								.$_REQUEST['txtLName']."', '"
								.$_REQUEST['txtEmail']."', '"
								.$_REQUEST['txtDateOfBirth']."', '"
								.$_REQUEST['txtCharityOrgId']."', '"
								.$_REQUEST['txtDetails']."', '"
								.$_REQUEST['txtDateOfJoin']."', '"
								.$_REQUEST['txtFacebook']."', '"
								.$_REQUEST['txtHashtag']."', '"
								.$_REQUEST['txtSkillsRequired']."', '"
								.$_REQUEST['txtLocation']."', '"
								.$_REQUEST['txtYearsOfExperience']."', '"
								.$_REQUEST['txtYoutubeURL']."')";				
				$resg1= mysql_query($qryg1)or die(mysql_error());
				sendMail($_REQUEST['txtEmail'], "[CProfile] Welcome on board!!!", "Dear ".$_REQUEST['txtFName'].", Welcome on board!!! Please login here http://www.cprofile.org/login.html");
				echo $qryg1;	
				break;
			}
		break;
	case 'skill':
			switch($actn){
				case 'set':
				$qryg1="insert into tbl_skill (name, category, details) 
						values ('".$_REQUEST['txtName']."', '"
								.$_REQUEST['catCategory']."', '"
								.$_REQUEST['txtDetails']."')";				
				$resg1= mysql_query($qryg1)or die(mysql_error());
				echo $qryg1;	
				break;
			}
		break;
	case 'donar':
		switch($actn){
			case 'set':
				$qryg1="insert into tbl_donor (Id, user_id, password, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId) values ('".$_REQUEST['did']."', '".$_REQUEST['emailId']."', '".$_REQUEST['password']."', '".$_REQUEST['fName']."', '".$_REQUEST['lName']."', '".$_REQUEST['gender']."', '".$_REQUEST['dob']."', '".$_REQUEST['points']."','".$_REQUEST['dor']."', '".$_REQUEST['address']."', '".$_REQUEST['pointsaggre']."', '".$_REQUEST['status']."', '".$_REQUEST['datecre']."', '".$_REQUEST['roleid']."', '".$_REQUEST['groupid']."')";
				$resg1= mysql_query($qryg1)or die(mysql_error());
			break;
			case 'get':
				$qryg2="select did, user_id, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId  from tbl_donor where id=".$_POST['id']; 
				$resg2= mysql_query($qryg2) or die(mysql_error());
				
				while($rowg2= mysql_fetch_array($resg2))
				 {
					$strin= $strin . '{"id":"'.$rowg2['did'].'", "user_id":"'.$rowg2['user_id'].'", "password":"'.$rowg2['password'].'", "firstName":"'.$rowg2['firstName'].'", "lastName":"'.$rowg2['lastName'].'", "gender":"'.$rowg2['gender'].'", "dob":"'.$rowg2['dob'].'", "points":"'.$rowg2['points'].'", "dateOfRegister":"'.$rowg2['dateOfRegister'].'", "address":"'.$rowg2['address'].'", "pointsAggregate":"'.$rowg2['pointsAggregate'].'", "status":"'.$rowg2['status'].'", "dateCreated":"'.$rowg2['dateCreated'].'", "roleId":"'.$rowg2['roleId'].'", "groupId":"'.$rowg2['groupId'].'"},';
				 }
				 $strin = mb_substr($strin, 0, -1);
	
				 echo "[" . $strin . "]";
				
			break;
			case 'update':
				$qryg3="update tbl_donor set lastName = '".$_REQUEST['lname']."' where dId = '".$_REQUEST['did']."'";
				$resg3= mysql_query($qryg3) or die(mysql_error());
		break;
	
	
	
		}
		break;
	case 'volunteer':
		switch($actn){
			case 'set':
				$qryv1="insert into tbl_volunteer (vId, user_id, password, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId) values ('".$_REQUEST['vid']."', '".$_REQUEST['uid']."', '".$_REQUEST['password']."', '".$_REQUEST['fname']."', '".$_REQUEST['lname']."', '".$_REQUEST['gender']."', '".$_REQUEST['dob']."', '".$_REQUEST['points']."','".$_REQUEST['dor']."', '".$_REQUEST['address']."', '".$_REQUEST['pointsaggre']."', '".$_REQUEST['status']."', '".$_REQUEST['datecre']."', '".$_REQUEST['roleid']."', '".$_REQUEST['groupid']."')";
				$resv1= mysql_query($qryv1)or die(mysql_error());
				
			break;
			case 'get':
				$qryv2="select vid, user_id, firstName, lastName, gender, dob, points, dateOfRegister, address, pointsAggregate, status, dateCreated, roleId, groupId  from tbl_volunteer"; 
				$resv2= mysql_query($qryv2) or die(mysql_error());
				
				while($rowv2= mysql_fetch_array($resv2))
				 {
					$strin= $strin . '{"id":"'.$rowv2['vid'].'", "user_id":"'.$rowv2['user_id'].'", "password":"'.$rowv2['password'].'", "firstName":"'.$rowv2['firstName'].'", "lastName":"'.$rowv2['lastName'].'", "gender":"'.$rowv2['gender'].'", "dob":"'.$rowv2['dob'].'", "points":"'.$rowv2['points'].'", "dateOfRegister":"'.$rowv2['dateOfRegister'].'", "address":"'.$rowv2['address'].'", "pointsAggregate":"'.$rowv2['pointsAggregate'].'", "status":"'.$rowv2['status'].'", "dateCreated":"'.$rowv2['dateCreated'].'", "roleId":"'.$rowv2['roleId'].'", "groupId":"'.$rowv2['groupId'].'"},';
				 }
				 $strin = mb_substr($strin, 0, -1);
	
				 echo "[" . $strin . "]";
			break;
			case 'update':
				$qryv3="update tbl_volunteer set lastName = '".$_REQUEST['lname']."' where vId = '".$_REQUEST['vid']."'";
				$resv3= mysql_query($qryv3) or die(mysql_error());
				
		break;
	
	
		}
	
		break;
	case 'group':
		switch($actn){
			case 'set':
				$qryd1="insert into tbl_group (charityorg_id, name, details, facebook, hashTag, video_url, skills) values ('"
						.$_REQUEST['txtCharityOrgId']."', '"
						.$_REQUEST['txtName']."', '"
						.$_REQUEST['txtDetails']."', '"
						.$_REQUEST['txtFacebook']."', '"
						.$_REQUEST['txtHashtag']."', '"
						.$_REQUEST['txtYoutubeURL']."', '"
						.$_REQUEST['txtSkillsRequired']."')";
				$resd1= mysql_query($qryd1)or die(mysql_error());
				
			break;
		}
	
		break;
	case 'employee':
	
	
		break;
	case 'organization':
	
	
		break;
	case 'charity':
		switch($actn){
			case 'set':
				$qryd1="insert into tbl_group (fundType,fundTitle,url,video,memberType,fName,lName,emailId) values ('".$_REQUEST['fundType']."', '".$_REQUEST['fundTitle']."', '".$_REQUEST['url']."', '".$_REQUEST['video']."', '".$_REQUEST['memberType']."', '".$_REQUEST['fName']."', '".$_REQUEST['lName']."', '".$_REQUEST['emailId']."')";
				$resd1= mysql_query($qryd1)or die(mysql_error());
				break;
			}
		break;
}

function sendMail($to, $subject, $message) {
	$headers = 'From: support@cprofile.org' . "\r\n" .
			'Reply-To: support@cprofile.org' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
}
?>