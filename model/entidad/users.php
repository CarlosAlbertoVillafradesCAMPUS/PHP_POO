<?php
class users extends connect{
    public $usuario;
    protected $contrasena;
    public $dataUser;

    public function __construct($usuario, $contrasena, $path){
        parent::__construct($path);
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->dataUser = $this->getData()[__CLASS__];
    }

    public function getUsuario(){
      $listUsers = array_combine(array_column($this->dataUser, "usuario"), array_column($this->dataUser, "contrasena"));
      $listIndex = array_combine(array_column($this->dataUser, "usuario"), array_keys($this->dataUser));

      return ($listUsers[$this->usuario] ?? null) == $this->contrasena //condicional de    ue si el usuario corresponde con la contraseña
      ? ["succes"=> "Correcto", "data"=>$this->dataUser[$listIndex[$this->usuario]]]
      : ["succes"=> "Error", "message"=>"Su usuario o contraseña no corresponden"];

    }
}
?>