<?php
require_once("lib/nusoap.php");
//require_once("config/config.php");

$wsdl ="https://home-apps.com:443/api/index.php?wsdl";
$client = new nusoap_client($wsdl, true);
error_reporting(-1);

################------- GET DATA ------------------#################
$result_data = $client->call('getDataConsultant'); // call function

print_r("<pre>");
print_r(json_decode($result_data)); // print output
print_r("</pre>");

?>