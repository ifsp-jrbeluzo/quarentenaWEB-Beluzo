<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício Compartilhado</title>
    </head>
    <style>
        #quadrado{
                border-style:solid;
                border-width:1px;
                width:500px;
                height:500px;
        }
    </style>
    <script>
        function escreve(){
            document.getElementById("quadrado2").innerHTML=document.getElementById("campo").value;
        }
    </script>
    <body>
        <h3> Exercicio Compartilhado</h3>
		
        <img src="negrito.png" onclick="negrito()"/>
        <img src="italico.png" onclick="italico()"/>
        <img src="sublinhado.png" onclick="sublinhado()"/>
        
        <div id="quadrado"><textarea id = "campo" name = "campo" placeholder="Digite aqui"></textarea></div>
		
        <div id="quadrado2"></div>
		
    </body>
</html>
