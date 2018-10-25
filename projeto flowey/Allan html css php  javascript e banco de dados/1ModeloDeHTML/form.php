<!Doctype HTML>
<html>
    <head>
        <script type="text/javascript" src="../Pizzaria/Javascript/script.js"></script>
        <script type="text/javascript" src="../Pizzaria/Javascript/js/jquery.js"></script>
        <script type="text/javascript" src="../Pizzaria/Javascript/js/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#tCPF").mask("999.999.999-99");
                $("#tData").mask("99/99/9999");
                $("#telefone").mask("(99) 99999-9999");
                $("#tCEP").mask("99999-999");
            });


            $(document).ready(function() {
                var campos_max          = 10;   //max de 10 campos
                var x = 1; // campos iniciais
                $('#add_field').click (function(e) {
                    e.preventDefault();     //prevenir novos clicks
                    if (x < campos_max) {
                            $('#listas').append('<div>\
                                    <input type="text" name="campo[]">\
                                    <a href="#" class="remover_campo">Remover</a>\
                                    </div>');
                            x++;
                    }
             });
 
             // Remover o div anterior
            $('#listas').on("click",".remover_campo",function(e) {
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                });
            });


        </script>
    </head>
    <body>
        
        
        <form method="POST">
            <select id="mySelect">
                <option value="">Selecione</option>
                <option value="nome">Nome</option>
                <option value="idade">Idade</option>
                <option value="telefone">Telefone</option>
                <option value="endereço">Endereço</option>            
            </select>
            <br><br>

            <label name="lCPF" id="lCPF">CPF: </label> 
            <input type="text" id="tCPF" name="tCPF"/><br>

            <label name="data" id="lData">Data: </label> 
            <input type="text" id="tData" name="tData"/><br>


            <label name="telefone" id="lTelefone">Telefone: </label>
            <input type="text" id="telefone" name="telefone"/> <br>

            <label name="CEP" id="lCEP">CEP: </label>
            <input type="text" id="tCEP" name="tCEP"/> <br>

             <label name="CEP" id="lCEP">CEP: </label>
            <input type="text" id="CEP" name="tCEP"/> <br>


            <input type="submit" value="OK" onclick="coleta()"/>

            XHTML

            <input type="button" id="add_field" value="adicionar">
            <br>
            <div id="listas">
                <div><input type="text" name="campo[]"></div>
            </div>

            <input type="button" id="add_field" value="adicionar">
            <br>
            <div id="listas">
                <div><input type="text" name="campo[]"></div>
            </div>


        </form>
    </body>
</html>