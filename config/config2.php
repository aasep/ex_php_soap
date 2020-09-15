<?php
require_once "../../medicapps/library/adodb5/adodb.inc.php" ;
##########################################################################
#            -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE -=              #
# -----------------------------------------------------------------------#
# 																		 #
#  																		 #
#  	Developed by:	Asep Arifyan						    			 #
#	License:		Commercial											 #
#  	Copyright: 		2018. All Rights Reserved.		                     #
#                                                                        #
#  	Additional modules (embedded): 										 #
#	-- Metronic (Themes) 												 #
#																		 #
#																		 #
# -----------------------------------------------------------------------#
#	Designed and built with all the love ,patience, and loyalty.		 #
##########################################################################

###### FOR URL  ############################## 
$document_root 			= $_SERVER['SERVER_NAME'] == "127.0.0.1" ? str_replace('/', '\\', $_SERVER['DOCUMENT_ROOT']) : $_SERVER['DOCUMENT_ROOT'];
$this_directory_path 	= str_replace('\\', '/', str_replace($document_root, '', getcwd())).'/';
$this_nama_domain 		= str_replace('www.', '', $_SERVER['HTTP_HOST']);

######  FOR CONSTANT ############################


#######################   POSTGRESQL  #######################################3
############### LOCAL ########################
$global["DATABASE"]	="u12352nbk_orto ";
$global["DB_USER"]	="u12352nbk_orto ";
$global["PASSWORD"]	="Instance12";
$global["HOST"]		="localhost";


try {
		$db9 = ADONewConnection('postgres');
		$db9->connect("host=".$global["HOST"]." user=".$global["DB_USER"]." password=".$global["PASSWORD"]." dbname=".$global["DATABASE"]." port=5432");
		$db9->SetFetchMode(ADODB_FETCH_ASSOC);
 		$db9->debug = false;
 		if (!$db9->IsConnected()){
 			echo  "error,,,,,";
 			//header('location: 123456789?status=failed_conn');
 			exit;
 		}

}catch (Exception $e) {
		echo  "ada yg error";
		//header('location: 123456789?status=failed_conn');
		die();
 		#die($e);
 	}



/*

$member[]=array();
$query_group=" select * from user_account  ";
$RS1  = $db9->Execute($query_group);

$i=0;
while(!$RS1->EOF){
//echo $RS1->fields['username']." ".$RS1->fields['email']."<br>";
$member[]= $RS1->fields['username']);

//$member['username'][$i]=$RS1->fields['username'];
//$member['email'][$i]=$RS1->fields['email'];
$i++;
$RS1->MoveNext();
}
*/
//$SQL = "select * from user_account ";
//$result = $db9->execute($SQL);
//while($r = $result->fetchRow())
 // print_r("<pre>");
 // print_r($r);
  //print_r("</pre>");
    //print_r($r)
	//header('Content-type: application/json');
    //return json_encode($member['username']);
    

  
    
    
?>