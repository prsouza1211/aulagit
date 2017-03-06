<?php 

	//http://felipedelima.com/?option=artigo&artigo=11
	//https://thaismizuno.com.br/2012/09/27/gerando-um-array-de-numero-randomicos-sem-repeticao/
	
	function geraLista()
	{
		$lista = array();
		
		for($i=0; $i<=5; $i++)
		{
			$num = rand(0,60);
			$lista[] = $num;
		}
		
		sort($lista);
		return $lista;
	}
	
	print_r(geraLista());
	