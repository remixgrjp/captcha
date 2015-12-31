<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="{$config.url}css/ethna.css" type="text/css" />
</head>
<body onLoad="document.formCapt.code.focus()">

<div id="header">
	<h1><a href='./'>Capt</a></h1>
</div>

<div id="main">
	<h2>Securimage 3.6.2</h2>
	<h3>http://www.phpcaptcha.org/download/</h3>
	<form method="post" action="{$script}" name="formCapt">
		<div>
			<img style="vertical-align:middle;"id="captcha" src="?action_Securimage={$smarty.now|date_format:"%y%m%d%H%M%S"}" alt="CAPTCHA Image" />
			 &lt;&lt; 
			<a href="#" onclick="document.getElementById('captcha').src = './?action_Securimage=' + Math.random();return false">
			<input type="button" value="Change Image" />
			</a>
		</div>
		<div>input charctors on image.</div>
		<div>{form_input name="code"}{message name="code"}</div>
		<div>
			<input type="submit" name="action_Index" value="submit" />{$app.info}
		</div>
	</form>
</div>

<div id="footer">
	Powered By <a href="http://ethna.jp">Ethna</a>-{$smarty.const.ETHNA_VERSION}.
</div>

</body>
</html>
