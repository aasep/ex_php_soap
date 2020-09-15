<?php
require_once("lib/nusoap.php");
/*
$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
*/
$wsdl ="https://home-apps.com:443/api/index.php?wsdl";
$client = new nusoap_client($wsdl, true);
error_reporting(-1);

$idx=$_GET['idx'];
$param_data=array($idx);
	################------- GET DATA ------------------#################
//echo "<br>";
$result_data = $client->call('getData',$param_data); // call function
//echo "data :";
print_r("<pre>");
//print_r(json_decode($result_data)); // print output
print_r(json_decode($result_data)); // print output
//echo $result_data;
print_r("</pre>");
//echo "<br>";
?>