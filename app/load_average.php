<?php


    for($i=0; $i<4; $i++){
     $datas[] = preg_replace('/\s+/', '', shell_exec('ifstat enp0s3 | grep -o -E \'[1-9]+\' | sort -n | tail -1'));
    }
    

echo json_encode($datas);