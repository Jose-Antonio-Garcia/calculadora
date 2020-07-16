<?
function setUsuario($request){
    $usuarios=new Usuario();
return $usuarios->setUsuario($request);
}
class Usuario{

    private $conexion;
    
    function __construct(){            
        $database=new DbConnect();
        $this->conexion=$database->connect();
    }
    function setUsuario($request){
        $usuarios;
        $response;
        $usuario=json_decode($request->getBody());
        $sql="INSERT INTO usuarios(id,contrasena) VALUES(:id,:contrasena)";    
        try{            
            $statement=$this->conexion->prepare($sql);
            $statement->bindParam("id",$usuario->id);
            $statement->bindParam("contrasena",$usuario->contrasena);
            $statement->execute();
            $response->mensaje="El usuario se inserto Correctamente";
        }catch(Exception $e){
            $response=$e;
        }
        return json_encode($response);
    }
}    