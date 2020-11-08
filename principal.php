<?php
session_start();

$PATH = "/home/u315715135/domains/mosaicweb.com.br/public_html/trackorder/tcc/";
include_once($PATH."pai.php");

if($_SESSION['codigo'])
{
	include_once("sk_principal.html");
}
else
{
	echo ("<script>alert('Você precisa estar logado.'); window.location=\"index.php\"</script>");
}

?>