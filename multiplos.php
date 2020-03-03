<html>
<head>
	<title>Ventas JavaScript</title>
	<p id="resultado"></p>
	<script type="text/javascript">
		var i=0;
			var num=0;
			var suma=0;
			while(i<49){
			  	if(num%7==0 && !num%2){
			  	document.write(" "+num+" ");
			  	i=i+1;
				}
				num=num+1;
			}
	</script>
</head>	
<body>

	<form>
		<p><input type="button" value="Mostrar" onClick="calcular()"></p>
	</form>

</body>
</html>