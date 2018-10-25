<!Doctype HTML>
<html>
	<head>
		<meta charset ="UTF-8">
		<title>Vetor Boladão</title>
	</head>
	<body>
		
		<form method="POST" action="exercicio2.php" id="formulario"> 
			<fieldset id="dados"><legend>Dados</legend>
				<label for="nome">Nome</label> 
				<input type="text" name="nome" id="iNome" size="20" placeholder="Seu nome ..." required>
				
				<br>
				<label for="telefone">Telefone:</label> 
				<input type="text" name="telefone" id="iTelefone" size="15" maxlength="15" placeholder="(XX)XXXXX-XXXX" required>
				
				<br>
				<label for="email">Email:</label> 
				<input type="email" name="email" id="iEmail" size="20" placeholder="seuemail@provedor.com" required>
				<br>
				
				<label for="dtNascimento">Data de Nascimento: </label>
				<input type="date" name="dtNascimento" id="iDtNascimento" size="5" required>
				
				<br>
			</fieldset>
			
			<input type="submit" name="enviar" id="iEnviar" value="Enviar">
			<br>
		</form>

		<?PHP
			$v = array();
			
			if(isset($_POST['nome'])){ //Função verifica se algum dado foi enviado para o input que tem o name 'nome'
				$v['nome'] = $_POST['nome']; // Coleta os dados que foram digitados nos inputs
				$v['telefone'] = $_POST['telefone'];
				$v['email'] = $_POST['email'];
				$v['data'] = $_POST['dtNascimento'];
				
				foreach($v as $indice => $conteudo){ //O foreach aplica uma determinada sequência de passos para cada elemento do vetor. Nesse caso a variável $indice representa os índices do vetor e $conteudo seus elementos.
					echo "No campo $indice o valor é $conteudo <br>";
				}
			}
		?>
		
		
	</body>
</html>