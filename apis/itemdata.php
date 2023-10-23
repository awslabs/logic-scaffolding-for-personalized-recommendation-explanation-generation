// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['url'])){
        $url = $_GET['url'];
        print_r(file_get_contents($url));
}else{
    echo 0;
}
?>