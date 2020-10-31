<?php
try{
 $pokemon_id=$_GET['pokemon_id'];
 if($pokemon_id == ''){
	 echo 'invalid pokemon';
 }
 $url = 'https://pokeapi.co/api/v2/evolution-chain/' . $pokemon_id;
 $response = file_get_contents($url);
 echo $response;
}catch(Exception $e){
    echo $e->getMessage();
}
?>