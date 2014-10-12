<input type="button" name="butDonate" value="Donate" onclick="javascript:paypal()">
<div id="paypal">
	<div id="paypalDonate">
		<tr>
			<td width="25%" valign="top">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
				">
				<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				Donate for a cause!
			</td>
			<td width="25%" align="left" valign="top">
				<object id="pingbox5v6yi9hcmg400" type="application/x-shockwave-flash" data="http://wgweb.msg.yahoo.com/badge/Pingbox.swf" width="240" height="420"><param name="movie" value="http://wgweb.msg.yahoo.com/badge/Pingbox.swf" /><param name="allowScriptAccess" value="always" /><param name="flashvars" value="wid=M.Nx15.uUHG8ed4XjpSXNOI-" /></object>
			</td>
		</tr>
	</div>
</div>

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