<?php

/**
 * class for table usuario
 * main objective : manipulate data from table usuario
 */

class Usuario{
    private $id;
    private $nome;
    private $email;

    
	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = trim($id);
		return $this;
	}

    

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = ucwords(trim($nome));
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = strtolower(trim($email));
		return $this;
	}

}

Interface UsuarioDao{
    public function add(Usuario $u);
    public function list();
    public function search($id);
    public function update(Usuario $u);
    public function delete($id);

}




?>