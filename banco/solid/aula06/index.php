<?php

interface DbConnection {
    public function connect();
}


class MySQLConnection implements DbConnection {
    public function connect() {
       
    }
}


class OracleConnection implements DbConnection {
    public function connect() {
    
    }
}

class MongoDBConnection implements DbConnection {
    public function connect() {
   
    }
}


class UsuarioDAO{

    private $db;

    public function __construct(DbConnection $dbConn){
        $this->db = $dbConn;
        
        echo "Conectando ao banco de dados<br>";

    }

 

}


$dbConn = new MySQLConnection();
$usuarioDAO = new UsuarioDAO($dbConn);


$dbConn = new OracleConnection();
$usuarioDAO2 = new UsuarioDAO($dbConn);

$dbConn = new MongoDBConnection();
$usuarioDAO3 = new UsuarioDAO($dbConn);


//explicando a dependency inversion : nesse principio quando formos instanciar uma conexao nao vamos precisar ficar a todo momento abrir novas conexoes. Vamos criar uma interface que vai ter um metodo chamado connect. Depois vamos criar as classes que vao implementar essa interface. Depois vamos criar uma classe que vai receber como parametro um objeto que implementa a interface DbConnection. E quando formos instanciar a classe UsuarioDAO, vamos passar como parametro um objeto que implementa a interface DbConnection. Isso é o principio da inversao de dependencia. Agora, se eu quiser trocar o banco de dados, eu nao preciso alterar o codigo da classe UsuarioDAO, eu so preciso alterar o codigo da classe que vai instanciar a classe UsuarioDAO. Isso é o principio da inversao de dependencia. Agora, se eu quiser trocar o banco de dados, eu nao preciso alterar o codigo da classe UsuarioDAO, eu so preciso alterar o codigo da classe que vai instanciar a classe UsuarioDAO.
















?>