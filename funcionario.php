<?php 
session_start();

$PATH = "/home/u315715135/domains/mosaicweb.com.br/public_html/trackorder/tcc/";
include_once($PATH."model/FuncionariosModel.php");

date_default_timezone_set('America/Los_Angeles');

$cod = trim(addslashes((($_GET['cod']))));
$acao = trim(addslashes((($_GET['acao']))));
$id = $_SESSION['codigo'];

if($_SESSION['codigo'] && (($_SESSION['tipo'] == "3") ))
{
	if($acao)
	{
		if($acao == "delet")
		{
			if($cod)
			{
				$dado = new FuncionariosModel();
		        $retorno = $dado->remove($cod);

		        if($retorno)
		        	echo ("<script>alert('Registro excluido com sucesso!'); window.location=\"funcionarios.php\"</script>");
		        else
		        	echo ("<script>alert('Não foi possível excluir, tente novamente.'); window.location=\"funcionarios.php\"</script>");
			}
		}
		elseif($acao == "cad") 
		{
			$dado = new FuncionariosController();
			$dado->setID(null);
			$dado->setNome(null);
			$dado->setEmail(null);
			$dado->setSenha(null);
			$dado->setStatus(null);
			$dado->setTipo(null);
			$dado->setFuncao(null);
			$dado->setNascimento(null);
			$dado->setInicio(null);
			$dado->setDesligamento(null);

			include_once("sk_funcionario.html");
		}
		elseif($acao == "add") {
			$funcionarios = new FuncionariosController();
			$obj = new FuncionariosModel();

			$funcionarios->setNome(trim(addslashes((($_POST['nome'])))));
			$funcionarios->setEmail(trim(addslashes((($_POST['email'])))));
			$funcionarios->setStatus(trim(addslashes((($_POST['status'])))));
			$funcionarios->setTipo(trim(addslashes((($_POST['tipo'])))));
			$funcionarios->setFuncao(trim(addslashes((($_POST['funcao'])))));
			$funcionarios->setInicio(trim(addslashes((($_POST['inicio'])))));
			$funcionarios->setNascimento(trim(addslashes((($_POST['nascimento'])))));
			$funcionarios->setDesligamento(trim(addslashes((($_POST['desligamento'])))));

			if($_POST['senha'])
			{
				$funcionarios->setSenha(md5(trim(addslashes((($_POST['senha']))))));
			}
			else
			{
				$funcionarios->setSenha(null);
			}

			if($cod)
			{
				$funcionarios->setID($cod);
				$retorno = $obj->update($funcionarios);
				if($retorno)
		            echo ("<script>alert('Registro alterado com sucesso!'); window.location=\"funcionarios.php\"</script>");
		        else
		        	echo ("<script>alert('Não foi possível alterar, tente novamente.'); window.location=\"funcionarios.php\"</script>");
			}
			else
			{
				$retorno = $obj->save($funcionarios);
		        if($retorno)
		            echo ("<script>alert('Registro incluido com sucesso!'); window.location=\"funcionarios.php\"</script>");
		        else
		        	echo ("<script>alert('Não é possível incluir itens iguais, tente novamente.'); window.location=\"funcionarios.php\"</script>");
	    	}
		}
		elseif($acao == "edit") {
			if($cod)
			{
				$obj = new FuncionariosModel();
				$dado = $obj->listById($cod);

				include_once("sk_funcionario.html");
			}
		}
		else
		{
			echo ("<script>alert('Opção inválida.'); window.location=\"funcionarios.php\"</script>");
		}
	}
}
else
{
	echo ("<script>alert('Você precisa estar logado.'); window.location=\"index.php\"</script>");
}

?>