<?

function Circunferencia($request){
    
    $datos=json_decode($request->getbody());
  
    $r=$datos->r;
    $a;
    $r=$r*$r;
    $a=pi()*$r;
    $respuesta->AreaCircunferencia=$a;

    return json_encode($respuesta);

}
