<?php

use MongoDB\Client;

class Storage
{
    private $bucket;

    function __construct()    
    {
        $mdbhost = getenv('MONGODB_HOST');
        $mdbuser = getenv('MONGODB_USER');
        $mdbpass = getenv('MONGODB_PASSWORD');
        $database = "almacen";
        $mongodbConn = new MongoDB\Client("mongodb://$mdbuser:$mdbpass@$mdbhost");
        $this->bucket = $mongodbConn->$database->selectGridFSBucket();        
    }
        

    function saveFile($nombre, $archivo)
    {
        $id = $this->fileExist($nombre);
        if ($id)
            $this->bucket->delete($id);
        $writeablestream =  $this->bucket->openUploadStream($nombre);
        fwrite($writeablestream, $archivo);
        fclose($writeablestream);
    }
    function fileExist($nombre)
    {
        try {
            $downloadStream = $this->bucket->openDownloadStreamByName($nombre);
            $fileId = $this->bucket->getFileIdForStream($downloadStream);
        } catch (Exception $e) {
            $fileId = false;
        }
        return $fileId;
    }
    
    function downloadAfile($nombre_archivo)
    {
        $downloadStream =  $this->bucket->openDownloadStreamByName($nombre_archivo);
        return stream_get_contents($downloadStream);
    }
}
