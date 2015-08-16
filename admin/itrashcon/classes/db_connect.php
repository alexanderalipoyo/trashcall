<?php 

	// Includes
	require_once 'cps_simple.php';

	$connectionStrings = array(	
	  'tcp://cloud-us-0.clusterpoint.com:9007',	
	  'tcp://cloud-us-1.clusterpoint.com:9007',	
	  'tcp://cloud-us-2.clusterpoint.com:9007',	
	  'tcp://cloud-us-3.clusterpoint.com:9007',	
	);	

	$cpsConn = new CPS_Connection(
					new CPS_LoadBalancer($connectionStrings), 
						'trashDB', 
						'louie.nullvoid@gmail.com', 
						'NullVoid143!', 
						//'document', 
						'//document/id', 
						array('account' => 100428)
				);	

	//$cpsConn->setDebug(true);	
	$cpsSimple = new CPS_Simple($cpsConn);	

?>