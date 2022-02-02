<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
		$url = "https://swapi.dev/api/people/1"; //string
		$ch = curl_init($url); //inicia o curl e atribue a uma variável
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //curl_defineopção, inicialização em variável, retorna a transferencia, define como true pra retornar.
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //curl_defineopção (inicialização do curl em variavel, curlopção, define como falso pra não verificar o peer)
		$response = curl_exec($ch); //decoda o arquivo executado em formato de notação de objeto de javascript
		$error = curl_error($ch);
		curl_close($ch);

		$people = json_decode($response);
		$frase = "O nome do ator é %s";
		printf($frase,$people->name);
	 ?>
</body>
</html>