<?php

     
        // include database connection
        include 'classes/db_connect.php';
     
        // Creating a new document
        $document = array(
            'title' => 'Test document',
            'body' => array(
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nisl magna.'
            )
        );

        // Insert
        $cpsSimple->insertSingle('id1', $document);


?>