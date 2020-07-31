<?php

require_once('/opt/kwynn/kwutils.php');

doit();

function doit() {
    kwas(isset($_REQUEST['epoch']), 'no epoch value');
    $e       = $_REQUEST['epoch'];
    kwas(is_numeric($e), 'epoch is not a number');
    $i = intval(floor($e));
    header('Content-Type: application/json');
    
    $ret['epoch'] = $i;
    $ret['r'    ] = date('r', $i);

    echo(json_encode($ret));

    exit(0);

}