// dto/UsuarioDTO.php
<?php
class UsuariologinDTO {
    public $emailUsu;
    public $nomeUsu;
    public $senhaUsu;
    
    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name = $value;
    }

}