<?php

function Aceleracion($request){
    
    $Dato=json_decode($request->getbody());
    $d=$Dato->d;
    $t=$Dato->t;
    $Aceleracion=$d*$t;
    return json_encode($Aceleracion);

}