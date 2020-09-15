<?php
//$GLOBALS['HTTP_RAW_POST_DATA'] = file_get_contents ('php://input';);
//$HTTP_RAW_POST_DATA = $GLOBALS['HTTP_RAW_POST_DATA'];

require_once("lib/nusoap.php");
require_once("config/config.php");
$soap = new soap_server();
$soap->configureWSDL('WEB SERVICE','http://www.tangual.info');
$soap->wsdl->schemaTargetNamespace="http://soapinterop.org/xsd/";
error_reporting(-1);

$soap->register(
       'getData',
	   array('idx' => 'xsd:string'),
	   array('output'=> 'xsd:json')
);

$soap->register(
       'getDataConsultant',
	   array(),
	   array('output'=> 'xsd:json')
);

//$soap->service(isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '');
//@$soap->service(file_get_contents("php://input"))
//$GLOBALS['HTTP_RAW_POST_DATA'] = file_get_contents ('php://input';);
@$soap->service(file_get_contents("php://input"));

function getData($idx)
{

    $query = " select count(distinct no_rekammedik) as jumlah from rek_operasi_mhs where id_dosen='".trim($idx)."' and status in ('2','3') ";
    //$query = " select * from master_dosen  ";
 //   select count(distinct no_rekammedik) as jumlah from rek_operasi_mhs where id_dosen='".trim($idx)."' and status in ('2','3')
    $resultx = pg_query($query);
    // $memberData=array();
    while($rowx=pg_fetch_array($resultx)){

    $memberData[]= $rowx;
    
    }
	header('Content-type: application/json');
    return json_encode($memberData);

}

function getDataConsultant()
{
    $query = " select * from master_dosen  ";
    $resultx = pg_query($query);
    while($rowx=pg_fetch_array($resultx)){
        $memberData[]= $rowx;
    }
	header('Content-type: application/json');
    return json_encode($memberData);

}
//print_r((getData(72)));

?>