<!Doctype HTML>
<HTML>
    <HEAD>
        <link rel="StyleSheet" type="text/css" href=""/>
        
        <script type="text/javascript">
            function coleta(){
                var opcao = 0;
                var opcao = document.getElementById("mySelect").value;
                var sabor = "";
                switch(opcao){
                case '1': 
                    sabor = "Americana";
                    break;
                case '2': 
                    sabor = "Portuguesa";
                    break;
                case '3': 
                    sabor = "Atum";
                    break;
                case '4': 
                    sabor = "Mussarela";
                    break;
                default:
                    sabor = "Selecione uma opção válida!";
                }
                alert(sabor);
                
            }    
        </script>

        <style type="text/css">
            body{
                margin: 0px;
                padding: 0px;
            }

            #cabecalho{
                background-image: url(../Imagens/Pizza.jpeg);
                top: -80px;
                background-position-x: 20px;
                background-position-y: -100px;
                background-size: 80%;
                width: 1310px;
                height: 500px;
                border: 20px solid white;
                position: fixed;
            }
            
            #conteudo{  
                background-color: transparent;
                width: 97%;
                height: 50%;
                border: 20px solid #888;
                border-bottom-width: 1000px;
                position: absolute;
            }

            #cont{
                position: relative;
           
            }
        </style>
    </HEAD>
    <BODY>
    <div id="cabecalho">
        Teste
    </div>
    
    <div id="conteudo">
            
    </div>
    <div id="cont">
            <select id="mySelect"  onchange="coleta();">
                <option value="0">Selecione:</value>
                <option value="1">Americana</value>
                <option value="2">Portuguesa</value>
                <option value="3">Atum</value>
                <option value="4">Mussarela</value>
            </select>
    </div>
    </BODY>
</HTML>