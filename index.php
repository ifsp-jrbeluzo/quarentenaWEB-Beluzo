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
        #quadrado2{
                border-style:solid;
                border-width:1px;
                width:500px;
                height:500px;
        }

    </style>
    <script>
        var testa_negrito=0, testa_italico=0, testa_sublinhado=0;
        function escreve(){
            document.getElementById("quadrado2").innerHTML=document.getElementById("campo").value;
        }
		function negrito(){

			if(document.getElementById("quadrado2").style.fontWeight == "bold")
			{
				document.getElementById("quadrado2").style.fontWeight = "normal";
			}
			else
			{
				 document.getElementById("quadrado2").style.fontWeight = "bold";
			}

		}
        function italico(){

			if(document.getElementById("quadrado2").style.fontStyle == "italic")
			{
				document.getElementById("quadrado2").style.fontStyle ="normal";
			}
			else
			{
				document.getElementById("quadrado2").style.fontStyle ="italic";
			}
		}
        function sublinhado(){

			if(document.getElementById("quadrado2").style.textDecoration == "underline")
			{
				document.getElementById("quadrado2").style.textDecoration ="none";
			}
			else
			{
				document.getElementById("quadrado2").style.textDecoration ="underline";
			}
		}
    </script>
    <body>
        <h3> Exercicio Compartilhado</h3>

        <img src="negrito.png" onclick="negrito()"/>
        <img src="italico.png" onclick="italico()"/>
        <img src="sublinhado.png" onclick="sublinhado()"/>

        <div style = "display: table">
            <div id="quadrado" style = "display: table-cell;">
                <textarea id = "campo" name = "campo" placeholder="Digite aqui" onkeyup="escreve()"></textarea>
            </div>

            <div id="quadrado2" style = "display: table-cell;"></div>
        </div>

    </body>
</html>
