<?php
class users extends connect{
    public $user;
    protected $password;
    public $dataUser;

    public function __construct($user, $password, $path){
        parent::__construct($path);
        $this->user = $user;
        $this->password = $password;
        $this->dataUser = $this->getData()[__CLASS__];
    }
    public function getUser(){
        $listUser = array_combine(array_column($this->dataUser, "user"), array_column($this->dataUser, "password"));
        $listIndex = array_combine(array_column($this->dataUser, "user"), array_keys($this->dataUser));

        return ($listUser[$this->user] ?? null)==$this->password
        ? ["succes"=>"Correcto", "data"=>$this->dataUser[$listIndex[$this->user]]]
        : ["succes"=>"Error", "message"=>"usuario o contraseña no coincide"];
    }
}
?>