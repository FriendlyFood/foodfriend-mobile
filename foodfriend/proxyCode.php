
<?php
	 // jSON URL which should be requested
	 $json_url = 'http://api.friendlyfood.me/1/search/producto/code/'.$_GET["codigo"].'/format/json';

	if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
	{
		$ch = curl_init($json_url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		$resultado = curl_exec ($ch);
		$json_res = json_decode($resultado);
	 
		// print_r($json_res->NombreProducto);
		print_r($resultado);
	}
	else
		echo "No hay soporte para cURL";

?>
