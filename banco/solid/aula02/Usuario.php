<?php


/**
 * Summary of Usuario
 */
class Usuario
{

    /**
     * Summary of nome
     * @var
     */
    private $nome;

    /**
     * Summary of getNome
     * @return mixed
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * Summary of setNome
     * @param mixed $nome
     * @return void
     */
    public function setNome($nome){
        $this->nome = $nome;
    }

    //algumas classes tem junto a manipulação do banco de dados

    /**
     * Summary of save
     * @return void
     */
    public function save(){
        //salva no banco de dados
    }

        //insert into usuarios (nome) values ('João');

    /**
     * Summary of update
     * @return void
     */
    public function update(){
        //atualiza no banco de dados
    }

        //update usuarios set nome = 'João' where id = 1;

    /**
     * Summary of delete
     * @return void
     * @param mixed $id
     */
    public function delete($id){
        //deleta no banco de dados
    }

        //delete from usuarios where id = 1;

        //essa classe ta tendo duas responsabilidades, uma é manipular os dados e outra é manipular o banco de dados

}
//por isso, nesse caso, nos separamos as classes. Uma classe para manipular os dados e outra para manipular o banco de dados. 



?>