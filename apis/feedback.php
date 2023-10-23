// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['id']) && isset($_GET['feedback']) && isset($_GET['rating'])){

        $id = $_GET['id'];
        $feedback = $_GET['feedback'];
        $rating = $_GET['rating'];

        $log = $_SERVER['SERVER_ADDR'] .",". $_SERVER['SERVER_NAME'] . "," . date("F-j-Y-g:i-a") . "," . $id . "," .  $feedback . "," . $rating .PHP_EOL;  ;

        file_put_contents('../logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
        echo 1;

}else{
    echo 0;
}
?>