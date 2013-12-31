<?php

$checkURL="http://www.guestsuite.tv/pf/checkLogin.php?site={$_GET['site']}&password={$_GET['password']}&redirurl={$_GET['redirurl']}";


$fh=@fopen($checkURL,'r');
if($fh) {
	$result=fread($fh,100);
	fclose($fh);
} else {
	$result="OK";
}


if($result == "OK") {
	header("Location: captiveportal-terms.php?portalaction={$_GET['portalaction']}&redirurl={$_GET['redirurl']}");
	exit();
} else {
	header("Location: http://10.0.0.4:8000/captiveportal-passcode.php?redirurl={$_GET['redirurl']}&portalaction={$_GET['portalaction']}");
    exit();
}
?>