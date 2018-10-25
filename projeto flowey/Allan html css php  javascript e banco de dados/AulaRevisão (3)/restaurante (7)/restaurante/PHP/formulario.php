<?PHP//Abertura do Documento
	
	function constFormulario(){
	return "<form id='formulario' method='Post' action='funcoes.php'> 
			
			<fieldset id='dadosCadastrais'><legend>Campos Cadastrais</legend>
				
				<label id='lComida'>Comida:</label> <!--TAG responsável por intitular um campo -->
				<!--Select de Comida-->
				<select name='comida'> 
					<option value='10'> Selecione: </option>
					<option value='c1'> 1  - Virado à Paulista  </option>
					<option value='c2'> 2  - Macarronada        </option>
					<option value='c3'> 3  - Feijoada           </option>
					<option value='c4'> 4  - Lasanha            </option>
					<option value='c5'> 5  - Peixe              </option>
					<option value='c6'> 6  - Churrasco          </option>
					<option value='c7'> 7  - Frango com Polenta </option>
					<option value='c8'> 8  - Zoião              </option>
					<option value='c9'> 9  - Strogonoff         </option>
					<option value='c10'> 10 - Arroz com Lentilha </option>
				</select>
				<br>
				<br>
				
				<label id='lBebida'>Bebida:</label> <!-- TAG responsável por intitular um campo 
				<!-- Select de Bebida -->
				<select name='bebida'> 
					<option value='10'> Selecione: </option>
					<option value='b1'> 1  - Coca-Cola    </option>
					<option value='b2'> 2  - Suco de Laranja            </option>
					<option value='b3'> 3  - Suco de Morango com Leite  </option>
					<option value='b4'> 4  - Suco de Manga com Abacaxi  </option>
					<option value='b5'> 5  - Guaraná                    </option>
					<option value='b6'> 6  - Fanta-Laranja/Uva          </option>
					<option value='b7'> 7  - Água               		 </option>
					<option value='b8'> 8  - Café               		 </option>
					<option value='b9'> 9  - Chá                	     </option>
				</select>
				<br>
				<br>
				
				
					
				<label id='lSobremesa'>Sobremesa:</label> <!-- TAG responsável por intitular um campo 
				<!-- Select de Sobremesa -->
				<select name='sobremesa'> 
					<option value='10'> Selecione: </option>
					<option value='s1'> 1  - Milk Shake de Ovomaltine  </option>
					<option value='s2'> 2  - Bolo de Chocolate           				 </option>
					<option value='s3'> 3  - Mousse de Maracuja  						 </option>
					<option value='s4'> 4  - Torta de Morango 							 </option>
					<option value='s5'> 5  - Pudim                                      </option>
					<option value='s6'> 6  - Banana com Nutella                         </option>
					<option value='s7'> 7  - Sorvete              		                 </option>
					<option value='s8'> 8  - Cheese Cake de Morango              		 </option>
					<option value='s9'> 9  - CupCake                      	             </option>
				</select>
				<br>
				<br>
				
				</fieldset><!-- Fechamento do dados Cadastrais  -->
			</form>";
	}//Fechamento da função formulário
			
	function escolha($comida, $bebida, $sobremesa){//função que mostra os valores de cada escolha
			switch($comida){
			case 'c1':
				$pComida   = 14.99;  
				$mensagem = "Sua comida é: Virado à Paulita, Preço: $pComida<br>";
				break;
			case 'c2': 
				$pComida   = 11.00;
				$mensagem = "Sua comida é: Macarronada, Preço: $pComida<br>";
				break;
			case 'c3': 
				$pComida  = 15.00;
				$mensagem = "Sua comida é: Feijoada, Preço: $pComida<br>";
				break;
			case 'c4': 
				$pComida  = 13.00;
				$mensagem = "Sua comida é: Lasanha, Preço: $pComida<br>";
				break;	
			case 'c5': 
				$pComida  = 17.00;
				$mensagem = "Sua comida é: Peixe, Preço: $pComida<br>";
				break;	
			case 'c6': 
				$pComida  = 23.00;
				$mensagem = "Sua comida é: Churrasco, Preço: $pComida<br>";
				break;	
			case 'c7': 
				$pComida = 15.00;
				$mensagem = "Sua comida é: Frango com polenta, Preço: $pComida<br>";
				break;	
			case 'c8': 
				$pComida  = 15.00;
				$mensagem = "Sua comida é: Zoião, Preço: $pComida<br>";
				break;	
			case 'c9': 
				$pComida  = 20.00;
				$mensagem = "Sua comida é: Strogonoff, Preço: $pComida<br>";
				break;	
			case 'c10': 
				$pComida  = 5.00;
				$mensagem = "Sua comida é: Lentilha com Arroz, Preço: $pComida<br>";
				break;	
			default: 
				$mensagem = "Escolha uma opção válida entre 1 e 9<br>";
				break;				
			}//Fim do escolha
					
			//Escolha da Bebida
			switch($bebida){
			case 'b1':
				$pBebida   = 6.00; 
				$mensagem .= "Sua Bebida é: Coca-Cola, Preço: $pBebida<br>";
				break;
			case 'b2': 
				$pBebida   = 4.50;
				$mensagem .= "Sua Bebida é: Suco de Laranja, Preço: $pBebida<br>";
				break;
			case 'b3': 
				$pBebida   = 7.00;
				$mensagem .= "Sua Bebida é: Suco de Morango com Leite, Preço: $pBebida<br>";
				break;
			case 'b4': 
				$pBebida   = 7.50;
				$mensagem .= "Sua Bebida é: Suco de Manga com Abacaxi, Preço: $pBebida<br>";
				break;	
			case 'b5': 
				$pBebida   = 5.00;
				$mensagem .= "Sua Bebida é: Guaraná, Preço: $pBebida<br>";
				break;	
			case 'b6': 
				$pBebida   = 5.00;
				$mensagem .= "Sua Bebida é: Fanta-Laranja/Uva, Preço: $pBebida<br>";
				break;	
			case 'b7': 
				$pBebida   = 2.50;
				$mensagem .= "Sua Bebida é: Água, Preço: $pBebida<br>";
				break;	
			case 'b8': 
				$pBebida   = 4.00;
				$mensagem .= "Sua Bebida é: Café, Preço: $pBebida<br>";
				break;	
			case 'b9': 
				$pBebida   = 2.50;
				$mensagem .= "Sua Bebida é: Chá, Preço: $pBebida<br>";
				break;	
			default: 
				$mensagem .= "Escolha uma opção válida entre 1 e 9<br>";
				break;	
			}//Fim do escolha de bebida
			
			//Escolha da Sobremesa
			switch($sobremesa){
			case 's1':
				$pSobremesa = 9.00;
				$mensagem  .= "Sua Sobremesa é: Milk Shake de Ovomaltine, Preço: $pSobremesa<br>";
				break;
			case 's2': 
				$pSobremesa = 5.00;
				$mensagem  .= "Sua Sobremesa é: Bolo de Chocolate, Preço: $pSobremesa<br>";
				break;
			case 's3': 
				$pSobremesa = 5.00;
				$mensagem  .= "Sua Sobremesa é: Mousse de Maracuja com Chocolate, Preço: $pSobremesa<br>";
				break;
			case 's4': 
				$pSobremesa =  6.50;
				$mensagem  .= "Sua Sobremesa é: Torta de Morango, Preço: $pSobremesa<br>";
				break;	
			case 's5': 
				$pSobremesa = 4.50;
				$mensagem  .= "Sua Sobremesa é: Pudim, Preço: $pSobremesa<br>";
				break;	
			case 's6': 
				$pSobremesa = 8.00;
				$mensagem  .= "Sua Sobremesa é: Torta de Banana com Nutella, Preço: $pSobremesa<br>";
				break;	
			case 's7': 
				$pSobremesa = 4.50;
				$mensagem  .= "Sua Sobremesa é: Sorvete, Preço: $pSobremesa<br>";
				break;	
			case 's8': 
				$pSobremesa = 15.00;				
				$mensagem  .= "Sua Sobremesa é: Cheese Cake com Morango, Preço: $pSobremesa<br>";
				break;	
			case 's9': 
				$pSobremesa = 2.50;
				$mensagem  .= "Sua Sobremesa é: CupCake, Preço: $pSobremesa<br>";
				break;	
			default: 
				$mensagem .= "Escolha uma opção válida entre 1 e 9<br>";
				break;	
			}//Fim do escolha de bebida
			
			$valor = $pComida + $pBebida + $pSobremesa;
			return $valor;
	}//fim da função escolhar	
		
?>
