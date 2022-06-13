<?php 
include 'translation.php';


## 
function get_trans_data_into_file(){
    global $db;
    $result = $db->select('SELECT text_id, bangla, english from `trans`');

    // print_r($result);
    $data = [];
    for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){
        $word = $result[$i];
        $data[$word['text_id']] = [
            'bn' => $word['bangla'],
            'en' => $word['english'],
        ];
    }
    // pre($data);
    file_put_contents('translation_local.bin', serialize($data));
}


get_trans_data_into_file();


function get_trade_for_data_into_file(){
    global $db;
    $result = $db->select('SELECT trade_id,name, trade_class, description from `list_of_trade` ');

    // print_r($result);
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
    //  pre($data);
    file_put_contents('list_of_trade_build.bin', serialize($data));
}


get_trade_for_data_into_file();