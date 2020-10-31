<?php
try{
 $pokemon=$_GET['pokemon'];
 if($pokemon == ''){
	 echo 'invalid pokemon';
 }
 $url = 'https://pokeapi.co/api/v2/pokemon/' . $pokemon;
 $response = file_get_contents($url);
 echo $response;
}catch(Exception $e){
    echo $e->getMessage();
}
?>