<!Doctype HTML>
<html>
	<head>
	<meta charset="UTF-8"/>
		<title> Tecnologia </title> <!-- Tag responsável por intitular uma ABA -->
	
		<!-- Parte responsável pela ligação entre CSS e HTML --> 
		<link rel="stylesheet" type="text/css" href="../CSS/formatacao.css"/>
		<!-- área responsável pelo link com o arquivo .js -->
		<script src="../JAVASCRIPT/interatividade.js"></script>
	
		
	</head>
	<body>
	<!-- TAG RESPONSÁVEL PELO CABEÇALHO DA PÁGINA-->
	<header id="cabecalho"><!-- <h1> INFORMAÇÕES SOBRE T.I. <h1>--> 
		<div id="logotipo">
			<img id="logo" src="../IMAGENS/lampada.png"/>
			<h1> Tec Tec </h1>
		</div>
	</header> 
	
	<!----------------------------------------------------------------------------------------------------------------->
	<!-- TAG RESPONSÁVEL PELO CONTEÚDO DA PÁGINA-->
	<div id="conteudo"> 
		<!-- Tag responsável por criar um formulário --> 
		<form id="formulario" method="Post"> 
			<!-- Super TAG PHP, dentro dela é possível escrever em PHP -->
			<?PHP 
			//Vamos escrever para o usuário um boas vindas!
				$idade = date('Y') - 1938;
				
				echo "<h1>Nossa empresa tem: $idade anos</h1>"; 
			?>
			<fieldset id="dadosCadastrais"><legend>Campos Cadastrais</legend>
			
				<label id="lNome">Nome:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="nome" id="campoNome" placeholder="Nome Completo" required="required"/>
				
				<br>
				<br>
				<label>Data de nascimento:</label> <!-- TAG responsável por intitular um campo -->
				<input type="date" name="dtNascimento" id="dtNascimento" required="required"/>
				
				<br>
				<br>
				<label>Endereço:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="endereco" id="endereco" placeholder="rua, número, bairro" required="required"/>
				
				<br>
				<br>
				<label>Telefone:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="telefone" id="telefone" placeholder="(XX) XXXX-XXXX" required="required"/>
				
				<br>
				<br>
				<label>Email:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="email" id="email" placeholder="nome@provedor.com" required="required"/>
				<!-- Botão do clique -->
				<br>
				<br>
				<input type="submit" name="botao" id="botao" value="Mostrar Dados" onclick="mostrarDadosVetor()"/>
			</fieldset>
			
			<!-- Área de radio para pagamento-->
			<fieldset id="dadosPagamento"><legend> Pagamento </legend>
				<input type="radio" name="pagamento" id="rBoleto" value="Boleto" />
				<label for="rBoleto"> Boleto </label>
				<br>
				<input type="radio" name="pagamento" id="rCartaoCredito" value="rCartaoCredito" />
				<label for="rCartaoCredito"> Cartão de Crédito </label>
				<br>
				<input type="radio" name="pagamento" id="rCartaoDebito" value="rCartaoDebito" />
				<label for="rCartaoDebito"> Cartão de Débito</label>
			</fieldset> 
		</form> 
		<!-- Tag responsável pela parte de uma página -->
		<div id="Jacinto">
		<?PHP 
			$opcao = 2;
			//Se Aninhado
			if($opcao == 001){
				echo "Sua opção é Virado a Paulista";
			}else if($opcao ==002){
				echo "Sua opção é Strogonoff";
			}else if ($opcao ==003){
				echo "Sua opção é Feijoada";
			}else if($opcao ==004){
				echo "Sua opção é Lasanha";
			}else if($opcao ==005){
				echo "Sua opção é Peixe";
			}else if($opcao ==006){
				echo "Sua opção é Churrasco c/ Cachaça";
			}else if($opcao ==007){
				echo "Sua opção é Macarronada c/ Almondega";
			}else{
				echo "Sua opção é Invalida";
			}
			
			//Escolha_caso
			switch($opcao){
			case 1:
				echo "<br>Sua opção é Virado a Paulista";
				break;
			case 2:
				echo "<br>Sua opção é Strogonoff";
				break;
			case 3:
				echo "<br>Sua opção é Feijoada";
				break;
			case 4:
				echo "<br>Sua opção é Lasanha";
				break;
			case 5:
				echo "<br>Sua opção é Peixe";
				break;
			case 6:
				echo "<br>Sua opção é Churrasco";
				break;
			case 7:
				echo "<br>Opção Macarrona";
				break;
			default:
				echo "<br>Opção Inválida";
				break;	
			}//Chave do Switch
		?>	
		</div>
		
		
		
	</div>
	<!----------------------------------------------------------------------------------------------------------------->	
	<!-- TAG RESPONSÁVEL PELO RODAPÉ -->
	<footer id="rodape">
	
	</footer>
	</body>
</html>