// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['item']) &&  isset($_GET['domain'])){
        $item = $_GET['item'];
        $domain = $_GET['domain'];
        $results = json_decode(file_get_contents("../data/".$domain.".json"),true);
        if(isset($results[$item])){
        $out = $results[$item];
        echo(json_encode($out));
        }
    else{
        echo 0;
    }
}else{
    echo 0;
}
?>