<?php
include("../res/x5engine.php");
$nameList = array("kkk","trt","wrs","3ha","p5d","hlu","cwy","adc","h3z","gmj");
$charList = array("P","D","D","3","F","F","5","3","W","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
