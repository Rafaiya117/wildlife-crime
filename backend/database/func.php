<?PHP

function post_sab($uri, $post_data){
    global $config;

    $headers = [
        'accept: application/json',
        'Content-Type: application/json',
        'authorization: Bearer ' . $config['api_token'] 
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $config['apiEndPoint'].$uri);

    // echo  $config['apiEndPoint'].$uri;

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    
    $server_output = curl_exec($ch);
    if($server_output === false)
    {
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);
    
    return $server_output;
}  


function cache($id, $obj = false){
    global $config;
    
    

    $filename = $config['cache_folder']. $id .'.x';


    // read the file.. if can't the run and write
    if(file_exists($filename)){
        return unserialize(file_get_contents($filename));
    }
     
    if($obj !== false){
        file_put_contents($filename,serialize($obj));
        return $obj;
    }
    
    throw new Exception('Nothing is saved in this id: ' . $id);
    

}


function keys_obj($obj){
    print_r( array_keys((array) $obj));

}
function pre($x, $die= False){
    print_r($x);
    if($die !== false){
        die("\n\n". '>>'. $die ."\n");
    }
}


function sanitizeXSS(){
    $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $_REQUEST = (array)$_POST + (array)$_GET + (array)$_REQUEST;
}

function set_header(){
    header('Content-Type: application/json; charset=utf-8');
}