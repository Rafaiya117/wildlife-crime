<?php

// use InsertCase as GlobalInsertCase;
// use LDAP\Result;

include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';

function list_trade(){
    global $db;

   

$result = $db->select('SELECT trade_id,name, trade_class, description from `list_of_trade` ');

// print_r($result);
// echo("break");

$data = [];

    $last_name = '-99999';
    for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){
    
        $word = $result[$i];
        $name = '';

        if($word['name'] !== $last_name){
            $last_name = $word['name'];
            $name =  $word['name'];
        }

        $data[$word['trade_id']] = [
            'b' => $name,
            'c' => $word['trade_class'],
            'd' => $word['description'],
        ];

      
    }
    
    echo '<pre>';
    pre($data);

}
list_trade();



