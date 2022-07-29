<?php

require_once('config/bootstrap.php');


define('JUNK_PATH', 'xmls/junk.xml');
define('PRIVACY_PATH', 'xmls/privacy.xml');


while(true){
    print_r("\r\n");
    $input = readline('Enter (1) for junk.xml, (2) for privacy.xml or anything else to stop : ');

    if($input == '1'){
        $xml = simplexml_load_file(JUNK_PATH);
    }else if($input == '2'){
        $xml = simplexml_load_file(PRIVACY_PATH);
    }else{
        break;
    }

    $scan_result = new ScanResults($xml);
    print_r("\r\n");
    $input = readline('Enter 1 - to order by alpha-numeric, 2 - to order by size or any other letter to default order : ');

    if($input == '1' || $input == '2'){
        $order = readline('1 - ASC, any - DESC');
        if($input == '1'){
            $scan_result->order_by_alpha_numeric($order == '1' ? 'ASC' : 'DESC');
        }else if($input == '2'){
            $scan_result->order_by_size($order == '1' ? 'ASC' : 'DESC');
        }
    }




    print_r("\r\n");
    print_r($scan_result->get_json());
    print_r("\r\n");
    print_r($scan_result->print_result());
    print_r("\r\n");

}

