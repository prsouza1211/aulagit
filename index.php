<?php

class Arquivo
{
	private $arquivo;
	
	function __construct($arquivo)
	{
		$this->setArquivo($arquivo);
	}
	
	
	function setArquivo($arquivo)
	{
		$this->arquivo = $arquivo;
	}
	
	function getArquivo()
	{
		return $this->arquivo; 
	}
	
	function lendoArquivo()
	{
		$arquivo = $this->getArquivo();
		
		if(is_file($arquivo) && file_exists($arquivo))
		{
			$conteudo = file_get_contents($arquivo);
			return nl2br($conteudo);
		}else{
			return "Argumento incorreto passado para o construtor da classe.";
		}
	}
}

$arq = new Arquivo("content.txt");
echo $arq->lendoArquivo();