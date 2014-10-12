<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Welcome to Uppuluri.com, the cyberhome of Uppuluri family</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="USS UPPULURI SREENIVASA SREEKANTH KHAMMAM RIT NATIONAL INSTITUTE OF TECHNOLOGY JAMSHEDPUR">
<META NAME="Description" CONTENT="USS UPPULURI SREENIVASA SREEKANTH KHAMMAM RIT NATIONAL INSTITUTE OF TECHNOLOGY JAMSHEDPUR">
</HEAD>

<BODY>
 <script src="http://static.ak.connect.facebook.com/connect.php/en_US" type="text/javascript"></script><script type="text/javascript">FB.init("ca74672d70d29d47fc43b22eb88053cc");</script>
<font face=arial size=+1 strong>
<center></center>
<table width="98%" align="center">
	<tr>
		<td width="20%" align="left" valign="top">
			<table>
				<tr>
					<td>
			<fb:profile-pic uid="loggedinuser" size="square" facebook-logo="true"></fb:profile-pic>
					</td>
					<td>
			<fb:name uid="loggedinuser" useyou="false" linked="true"></fb:name>
					</td>
				</tr>
			</table>
		</td>
		<td align="left" valign="bottom" rowspan="2">
			<font face="tahoma" size=+1>
				Welcome to www.uppuluri.com!
			</font>
		</td>
		<td width="50%" align="right" valign="top"><font face="tahoma" size=+1><i>Maximize.. Manage.. Motivate..</i></font></td>
	</tr>
	<tr>
		<td align="left" valign="bottom">
			<fb:login-button v="2" size="medium" onlogin="window.location.reload(true);">Connect with Facebook</fb:login-button>
		</td>
		<td align="right" valign="bottom">
			<b>Home</b> | 
			<a href="mytwitterfeed.php">Twitter</a> | 
			<a href="res.html">Resources</a> | 
			<a href="https://webmailcluster.perfora.net/xml/webmail">Email</a> | 
			<a href="gallery.html">Image Gallery</a> | 
			<a href="familytree.html">Family Tree</a> 
		</td>
	</tr>
</table>
<hr>
<table width="98%" align="center">
	<tr>
		<td width="25%" valign="top">
			<table width="100%" align="center" valign="top">
				<tr>
					<td width="5%" align="left" valign="top">
						<a href="res.html"><img src="images/res.jpg" height="40px"></a>
					</td>
					<td align="left" valign="top" bgcolor="#aabbcc">Projects</td>
				</tr>
			</table>
		</td>
		<td width="25%" valign="top">
			<table width="100%" align="center" valign="top">
				<tr>
					<td width="5%" align="left" valign="top">
						<a href="gallery.html"><img src="images/gallery.jpg" height="40px"></a>
					</td>
					<td align="left" valign="top" bgcolor="#aabbcc">
<?php
	//echo $facebook->api_client->friends_get('','');
?>
						Friends
					</td>
				</tr>
				<tr>
					<td align="left" valign="top" colspan="2">
						<div id="profile_pics"></div>
						<script type="text/javascript">
						var widget_div = document.getElementById("profile_pics");
						FB.ensureInit(function () {
						  FB.Facebook.get_sessionState().waitUntilReady(function() {
						  FB.Facebook.apiClient.friends_get(null, function(result) {
							var markup = "";
							var num_friends = result ? Math.min(20, result.length) : 0;
							if (num_friends > 0) {
							  for (var i=0; i<num_friends; i++) {
								markup += 
								  '<fb:profile-pic size="square" uid="'+result[i]+'" facebook-logo="true"></fb:profile-pic>';
							  }
							}
							widget_div.innerHTML = markup;
							FB.XFBML.Host.parseDomElement(widget_div);
						  });
						  });
						});
						</script>
					</td>
				</tr>
			</table>
		</td>
		<td width="25%" valign="top">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
			">
			<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
			More than a million people got displaced in Andhra Pradesh because of the worst floods of the century.<br>
			Please lend a helping hand by donating here via exclusive account setup for raising the funds for flood relief.
		</td>
		<td width="25%" align="left" valign="top">
			<object id="pingbox5v6yi9hcmg400" type="application/x-shockwave-flash" data="http://wgweb.msg.yahoo.com/badge/Pingbox.swf" width="240" height="420"><param name="movie" value="http://wgweb.msg.yahoo.com/badge/Pingbox.swf" /><param name="allowScriptAccess" value="always" /><param name="flashvars" value="wid=M.Nx15.uUHG8ed4XjpSXNOI-" /></object>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" colspan="2">
		<!--
			<a href="http://messenger.yahoo.com/edit/send/?.target=uss1049">
				<img border="0" src="http://opi.yahoo.com/yahooonline/u=uss1049/m=g/t=15/l=us/opi.gif">
			</a>
		-->
		</td>
		<td align="right" valign="top" colspan="2">
		</td>
	</tr>
</table>
</font>

</BODY>
</HTML>
