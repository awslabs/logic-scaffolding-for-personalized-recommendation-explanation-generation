// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_GET['history']) && isset($_GET['domain'])){

        $items = $_GET['history'];
        $domain = $_GET['domain'];
        $items_arr = explode(',',$items);
        $results = json_decode(file_get_contents("../data/".$domain.".json"),true);

        $out = array();
        foreach($items_arr as $item){
            if(isset($results[$item])){
                $temp = array('item_title' => $results[$item]['title'], 'item_image' => $results[$item]['image']);
                array_push($out,$temp);
                }
        }
        echo(json_encode($out));
}else{
    echo 0;
}
?>