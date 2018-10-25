/*Arquivo responsável por todas as interações da página HTML5, 
todas elas serão feitas com javascript*/

/*Variável tipo global*/
var nome         = "";
var dtNascimento = "";
var telefone     = "";
var endereco     = "";
var email        = "";
var campos       = false; //Variável lógica, responsável por informar se o campo está preenchido ou não
var contVetorG   = 0; //Contador Do Vetor Guardar
var contVetorM   = 0; //Contador do Vetor Mostrar
var mensagem     = "";

/*Declaração de vetores 1 vetor para cada tipo de cadastro*/
var nome         = new Array(5);
var dtNascimento = new Array(5);
var telefone     = new Array(5);
var endereco     = new Array(5);
var email        = new Array(5);

/* function nomeDaFuncao() <- Declaração de função*/
function coletarDados(){
	nome         = document.getElementById("campoNome").value; /* Coleta por ID*/
	dtNascimento = document.getElementById("dtNascimento").value; /* Coleta por ID*/
	telefone     = document.getElementById("telefone").value; /* Coleta por ID*/
	endereco     = document.getElementById("endereco").value; /* Coleta por ID*/
	email        = document.getElementById("email").value; /* Coleta por ID*/
	/*Código responsável por verificar se os campos estão preenchidos*/
	if( (nome != "") && (dtNascimento != "") && (telefone != "") && (endereco != "") 
		&& (email != "") ){
		campos = true;
	}//fim da função if
}// Colchetes responsável pelo fechamento da função coletarDados()

/*Função responsável por mostrar os dados*/
function mostrarDados(){
		if( campos == true ){
			alert("Nome: "            + nome         + 
				"\nData Nascimento: " + dtNascimento + 
				"\nTelefone: "        + telefone     + 
				"\nEndereço: "        + endereco     + 
				"\nEmail: "           + email        );
		}else{
			alert("Um ou mais campos obrigatórios não foram preenchidos");
		}//fim do if	
}//Fim da função

/*Criar um vetor de 5 posições, 1 vetor para cada campo*/
function guardarDadosVetor(){
	nome[contVetorG]         = document.getElementById("campoNome").value;
	dtNascimento[contVetorG] = document.getElementById("dtNascimento").value; /* Coleta por ID*/
	telefone[contVetorG]	 = document.getElementById("telefone").value; /* Coleta por ID*/
	endereco[contVetorG] 	 = document.getElementById("endereco").value; /* Coleta por ID*/
	email[contVetorG]        = document.getElementById("email").value; 
	
	if(contVetorG < 5){
		contVetorG++;
	}	
}//Fim da função

/*Mostrar Dados do Vetor*/
function mostrarDadosVetor(){
	guardarDadosVetor();
	if(contVetorM < 5){
	mensagem   += "Posição " + contVetorM   + ": " + 
				   nome[contVetorM]         + ", " +
				   dtNascimento[contVetorM] + ", " +
				   telefone[contVetorM]     + ", " + 
				   endereco[contVetorM]     + ", " +
				   email[contVetorM]        + ";\n";
	//Responsável por incrementar o vetor
		contVetorM++;
		alert(mensagem);
	}else{
		alert("Limite de Usuários Excedido!");
	}
}//Fim da função
