<?php
     
    require_once 'cps_simple.php';
    require_once('cps_api.php');

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
                        'document', 
                        '//document/id', 
                        array('account' => 100428)
                );  

    if(isset($_POST['submit'])) {
        $cpsSimple = new CPS_Simple($cpsConn);  
        
        $document = array(
            'data' => array(
                'from'   => $_POST['timeFrom'],
                'to' => $_POST['timeTo'],
                'day' => $_POST['day'],
                'discharge' => $_POST['discharge'],
                'lat' => $_POST['lat'],
                'lng' => $_POST['lng']
            )
        );
        cpsInsert($cpsSimple, $document);
    }
    function cpsInsert($cpsSimple, $data)
    {
        for ($i=0; $i < 3; $i++) { 
            try {
                $id  = uniqid();
                $cpsSimple->insertSingle($id, $data);
                return $id;
            } catch( cps_exception $e){
                if ($e->getcode() != 2626) throw $e; {
                }
            }
        }
    }

        


?>