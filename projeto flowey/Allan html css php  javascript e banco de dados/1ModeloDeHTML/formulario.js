/*Função para teste*/
function salvar(){
	 if(confirm("Há algo errado!")){
		 alert("confirmado");
	 }
	 else{
		 alert("Rejeitado");
	 }
 }
 
/* Função que coleta todos os dados de campos do formulário */ 
 function coletarDados(){
	 /* Declarando as variáveis locais */
	 var nome, email, data, telefone, procura, url, dateTime, time, number, rand, color;
	 
	 /* Coletando dados nos campos */
	 nome = document.meuForm.nome.value;
	 email = document.meuForm.email.value;
	 data = document.meuForm.data.value;
	 telefone = document.meuForm.telefone.value;
	 url = document.meuForm.url.value;
	 
	 /*
	 dateTime = document.meuForm.dateTime.value;
	 time = document.meuForm.time.value;
	 number = document.meuForm.number.value;
	 rand = document.meuForm.rand.value;
	 color = document.meuForm.color.value;*/
	 
	 /* Mensagem de Saída */
	 if(confirm("Nome: "        + nome     + 
				"\nE-mail: "    + email    +
				"\nData: "      + data     +
				"\nTelefone: "  + telefone +
				"\nProcura: "   + procura  +
				"\nUrl: "       + url      +
				"\nDate Time: " + dateTime + 
				"\nTime: "      + time     + 
				"\nNumber: "    + number   + 
				"\nRand: "      + rand))
	 {
		 alert("Dados Confirmados");
	 }
	 else 
	 {
		 alert("Dados Rejeitados");
	 };
 }
 
 /*  */