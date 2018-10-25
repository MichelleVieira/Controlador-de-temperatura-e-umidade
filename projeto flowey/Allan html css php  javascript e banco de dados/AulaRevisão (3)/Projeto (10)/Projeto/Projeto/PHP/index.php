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
		<form id="formulario" method="Post" action="index.php"> 
			<!-- Super TAG PHP, dentro dela é possível escrever em PHP -->
			<fieldset id="dadosCadastrais"><legend>Campos Cadastrais</legend>
			
				<label id="lComida">Comida:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="comida" id="campoComida" placeholder="Nome/Codigo Comida" required="required"/>
				<br>
				<br>
				<label id="lBebida">Bebida:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="bebida" id="campoBebida" placeholder="Nome/Codigo Bebida" required="required"/>
				<br>
				<br>
				<label id="lSobremesa">Sobremesa:</label> <!-- TAG responsável por intitular um campo -->
				<input type="text" name="sobremesa" id="campoSobremesa" placeholder="Nome/Codigo Sobremesa" required="required"/>
				 
				<br>
				<br>
				<input type="submit" name="submit" id="botao" value="Mostrar Dados" onclick="mostrarDadosVetor()"/>
		<!--TAG RESPONSÁVEL PELO CONTEÚDO PHP -->
		<?PHP
			$comida = 0;
			$bebida = 0;
			$sobremesa = 0;
		
			if(isset($_POST['submit'])){//Existe(isset) botão enviar ou não?
				$comida 	= $_POST['comida'];
				$bebida 	= $_POST['bebida'];	
				$sobremesa 	= $_POST['sobremesa'];	
			}else{
				echo "Valor Inválido";
			}
			//Escolha do prato principal de acordo com código
			switch($comida){
			case 1:
				$pComida   = 14.99;  
				$mensagem = "Sua comida é: Virado a Paulita, Preço: $pComida<br>";
				break;
			case 2: 
				$pComida   = 11.00;
				$mensagem = "Sua comida é: Macarronada, Preço: $pComida<br>";
				break;
			case 3: 
				$pComida  = 15.00;
				$mensagem = "Sua comida é: Feijoada, Preço: $pComida<br>";
				break;
			case 4: 
				$pComida  = 13.00;
				$mensagem = "Sua comida é: Lasanha, Preço: $pComida<br>";
				break;	
			case 5: 
				$pComida  = 17.00;
				$mensagem = "Sua comida é: Peixe, Preço: $pComida<br>";
				break;	
			case 6: 
				$pComida  = 23.00;
				$mensagem = "Sua comida é: Churrasco, Preço: $pComida<br>";
				break;	
			case 7: 
				$pComida = 15.00;
				$mensagem = "Sua comida é: Frango com polenta, Preço: $pComida<br>";
				break;	
			case 8: 
				$pComida  = 15.00;
				$mensagem = "Sua comida é: Zoião, Preço: $pComida<br>";
				break;	
			case 9: 
				$pComida  = 20.00;
				$mensagem = "Sua comida é: Strogonoff, Preço: $pComida<br>";
				break;	
			case 10: 
				$pComida  = 5.00;
				$mensagem = "Sua comida é: Lentilha com Arroz, Preço: $pComida<br>";
				break;	
			default: 
				$mensagem = "Escolha uma opção válida entre 1 e 9<br>";
				break;				
			}//Fim do escolha
			
			//Escolha da Bebida
			switch($bebida){
			case 1:
				$pBebida   = 6.00; 
				$mensagem .= "Sua Bebida é: Coca-Cola, Preço: $pBebida<br>";
				break;
			case 2: 
				$pBebida   = 4.50;
				$mensagem .= "Sua Bebida é: Suco de Laranja, Preço: $pBebida<br>";
				break;
			case 3: 
				$pBebida   = 7.00;
				$mensagem .= "Sua Bebida é: Suco de Morango com Leite, Preço: $pBebida<br>";
				break;
			case 4: 
				$pBebida   = 7.50;
				$mensagem .= "Sua Bebida é: Suco de Manga com Abacaxi, Preço: $pBebida<br>";
				break;	
			case 5: 
				$pBebida   = 5.00;
				$mensagem .= "Sua Bebida é: Guaraná, Preço: $pBebida<br>";
				break;	
			case 6: 
				$pBebida   = 5.00;
				$mensagem .= "Sua Bebida é: Fanta-Laranja/Uva, Preço: $pBebida<br>";
				break;	
			case 7: 
				$pBebida   = 2.50;
				$mensagem .= "Sua Bebida é: Água, Preço: $pBebida<br>";
				break;	
			case 8: 
				$pBebida   = 4.00;
				$mensagem .= "Sua Bebida é: Café, Preço: $pBebida<br>";
				break;	
			case 9: 
				$pBebida   = 2.50;
				$mensagem .= "Sua Bebida é: Chá, Preço: $pBebida<br>";
				break;	
			default: 
				$mensagem .= "Escolha uma opção válida entre 1 e 9<br>";
				break;	
			}//Fim do escolha de bebida
			
			//Escolha da Sobremesa
			switch($sobremesa){
			case 1:
				$pSobremesa = 9.00;
				$mensagem  .= "Sua Sobremesa é: Milk Shake de Ovomaltine, Preço: $pSobremesa<br>";
				break;
			case 2: 
				$pSobremesa = 5.00;
				$mensagem  .= "Sua Sobremesa é: Bolo de Chocolate, Preço: $pSobremesa<br>";
				break;
			case 3: 
				$pSobremesa = 5.00;
				$mensagem  .= "Sua Sobremesa é: Mousse de Maracuja com Chocolate, Preço: $pSobremesa<br>";
				break;
			case 4: 
				$pSobremesa =  6.50;
				$mensagem  .= "Sua Sobremesa é: Torta de Morango, Preço: $pSobremesa<br>";
				break;	
			case 5: 
				$pSobremesa = 4.50;
				$mensagem  .= "Sua Sobremesa é: Pudim, Preço: $pSobremesa<br>";
				break;	
			case 6: 
				$pSobremesa = 8.00;
				$mensagem  .= "Sua Sobremesa é: Torta de Banana com Nutella, Preço: $pSobremesa<br>";
				break;	
			case 7: 
				$pSobremesa = 4.50;
				$mensagem  .= "Sua Sobremesa é: Sorvete, Preço: $pSobremesa<br>";
				break;	
			case 8: 
				$pSobremesa = 15.00;				
				$mensagem  .= "Sua Sobremesa é: Cheese Cake com Morango, Preço: $pSobremesa<br>";
				break;	
			case 9: 
				$pSobremesa = 2.50;
				$mensagem  .= "Sua Sobremesa é: CupCake, Preço: $pSobremesa<br>";
				break;	
			default: 
				$mensagem .= "Escolha uma opção válida entre 1 e 9<br>";
				break;	
			}//Fim do escolha de bebida
			$valor = $pComida + $pBebida + $pSobremesa;
			//Mostrar para o usuário o seu pedido 
			echo "<br>Seu pedido é: <br><br>" . $mensagem . "Total: R$ $valor <br>";
		?>	
			
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
		
		</div>
		
		
		
	</div>
	<!----------------------------------------------------------------------------------------------------------------->	
	<!-- TAG RESPONSÁVEL PELO RODAPÉ -->
	<footer id="rodape">
	
	</footer>
	</body>
</html>