// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['item']) && isset($_GET['history']) && isset($_GET['model']) && isset($_GET['finetune']) && isset($_GET['domain']) && isset($_GET['ex']) ){

        $item = $_GET['item'];
        $history = $_GET['history'];
        $model = $_GET['model'];
        $finetune = $_GET['finetune'];
        $domain = $_GET['domain'];
        $ex = $_GET['ex'];

        $results = json_decode(file_get_contents("../data/".$domain."_evidence.json"),true);

        foreach($results as $result){
            if($result['item'] == $item){
                if($result['history'] == $history){
                    if($result['model'] == $model){
                        if($result['finetune'] == $finetune){
                            if($result['ex'] == $ex){
                            $output = array('ex' => $result["ex"], 'evidence' => $result["evidence"]);
                            echo(json_encode($output));
                            break;
                            }
                        }
                    }
                }
            }
        }

}else{
    echo 0;
}
?>