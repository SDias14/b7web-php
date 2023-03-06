<?php




require_once 'model/Usuario.php';

class UsuarioDao implements UsuarioDao{

    private $pdo;


    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }
    public function add(Usuario $u){

    }
    public function list(){

    }
    
    public function search($id){

    }

    public function update(Usuario $u){

    }

    public function delete($id){

    }
}





?>