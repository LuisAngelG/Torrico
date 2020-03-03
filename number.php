<html>
<head>
	<title>Ventas JavaScript</title>
	<script type="text/javascript">
		
			var calcular = function(){
				var valor1 = parseFloat(document.getElementById('T1').value)
				if (valor1 == 0) {
					document.getElementById('resultado').value = "El numero " + valor1 + " es nulo";
				} else {
					var tipo = (valor1%2)?"Impar":"Par";
					document.getElementById('resultado').value = "El numero " + valor1 + " es " + tipo;
				}
				
			};
		
	</script>
</head>	
<body>

	<form>
		<p>Valor: <input type="text" id="T1" name="20"></p>
		<p><input type="button" value="Calcular" onClick="calcular()"></p>
		<p>Resultado: <input type="text" id="resultado" disabled="disabled"></p>
	</form>

</body>
</html>