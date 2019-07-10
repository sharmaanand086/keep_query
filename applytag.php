<?php 
session_start();

require("isdk.php");
$app = new iSDK; 
	if ($app->cfgCon("connectionName")) 
{
   	$contactId = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $phone), 'Email');
	$_SESSION["contactId"]	= 	$contactId;
	
    	$groupId1 = 14951;			// Success payment Tag
		$result5 = $app->grpAssign($contactId, $groupId1);
		
}
