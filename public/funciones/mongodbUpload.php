<?
function uploadFile($request){
    
    $almacen=new Storage();

    $archivo=file_get_contents(
        "/home/storage/logs/php/error.log"
    );
    $nombre="ejemplo.txt";

    $almacen->saveFile($nombre,$archivo);  

    file_put_contents(
    "/home/storage/logs/php/ejemplo.txt",
    $almacen->downloadAfile($nombre)
);

    return  "its working";

}