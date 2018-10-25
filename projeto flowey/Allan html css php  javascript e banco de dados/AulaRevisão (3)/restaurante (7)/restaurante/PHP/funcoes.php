<?PHP//TAG de Abertura do PHP
	include "formulario.php";// Faz a conexão com o arquivo formulário.php
	
	function coletarDados($nome){
		if(isset($_POST['botao'])){
			$dado = $_POST[$nome];	
		}else{
			$dado = "Não Possui Botão";
		}
		return $dado;
	}//Fim da Função de Coleta
	
	//Função construirá formulários na tela do usuário
	function formulario($nome){
		$qtde = (int)coletarDados($nome);
		for($i=0;$i < $qtde;$i++){
			$html .= constFormulario();
		}//fim for	
		echo $html;
	}//Função para construção de form
	



//TAG DE FECHAMENTO DO PHP
?>