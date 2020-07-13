<?php

function veloci($request){
    
    $info=json_decode($request->getbody());
    $t=$info->t;
    $d=$info->d;

    $respuesta=($t/$d);
    return json_encode($respuesta);

}
