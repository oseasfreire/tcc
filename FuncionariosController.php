<?php 

class FuncionariosController {
    private $ID;
	private $TIPO;
	private $STATUS;
	private $NOME;
    private $EMAIL;
    private $SENHA;
    private $NASCIMENTO;
    private $DESLIGAMENTO;
    private $INICIO;
    private $FUNCAO;

	public function setId( $ID )
    {
        $this->ID = $ID;
        return $this;
    }
      
    public function getId()
    {
        return $this->ID;
    }

    public function getFuncao()
    {
        return $this->Funcao;
    }
    
    public function setFuncao($Funcao)
    {
        return $this->Funcao = $Funcao;
    }

    public function getDesligamento() {
        return $this->Desligamento;
    }
     
    public function setDesligamento($Desligamento) {
        $this->Desligamento = $Desligamento;
    }

    public function getInicio() {
        return $this->Inicio;
    }
     
    public function setInicio($Inicio) {
        $this->Inicio = $Inicio;
    }

    public function getNascimento() {
        return $this->Nascimento;
    }
     
    public function setNascimento($Nascimento) {
        $this->Nascimento = $Nascimento;
    }

    public function setNome( $Nome )
    {
        $this->Nome = $Nome;
        return $this;
    }
      
    public function getNome()
    {
        return $this->Nome;
    }

    public function getTipo()
    {
        return $this->Tipo;
    }
     
    public function setTipo($Tipo)
    {
        return $this->Tipo = $Tipo;
    }

    public function getStatus()
    {
        return $this->Status;
    }
     
    public function setStatus($Status)
    {
        return $this->Status = $Status;
    }

    public function getEmail()
    {
        return $this->Email;
    }
     
    public function setEmail($Email)
    {
        return $this->Email = $Email;
    }

    public function getSenha()
    {
        return $this->Senha;
    }
     
    public function setSenha($Senha)
    {
        return $this->Senha = $Senha;
    }
}

?>