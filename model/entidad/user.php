<?php
class user{
    public $usuario;
    protected $contraseña;

    static $config = array(
        "html"=>[
            "header"=>"Content-Type:application/json"
        ]
        );

    public function __construct($usuario, $contraseña){
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
    }

    public function getUsuario(){
        self::$config["html"]["method"] = "GET";
        $res = file_get_contents("http://localhost:4001/users?usuario=$this->usuario&contraseña=$this->contraseña", false, stream_context_create(self::$config));
    return $res;
    }
}
?>