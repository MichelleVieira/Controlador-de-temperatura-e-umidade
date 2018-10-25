<!Doctype HTML>
<html>
	<head>
	</head>
	<body>	
			<?PHP
				$v = array(); //Criando um vetor sem nenhum elemento
				//$v = array(2,4,6), vai cair no caso else
					
				if(count($v) == 0){ //Conta quantos elementos possui o vetor, caso seja nulo preenche o vetor
					$v = range(0, 300, 1); // Preenchendo o vetor com elementos de 0 a 300 com passo 1
					foreach($v as $valor){ // Faz a rotina determinada para cada elemento do vetor
						echo $valor/2 . "<br>";
					}
					echo count($v); // Exibe a quantidade de elementos no vetor
				}
				else{
					echo "Esse vetor não está vazio";
				}
			?> 
	</body>
</html>