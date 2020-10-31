<html>
<head>
 <title>Send HTTP Get Request using PHP</title>
 <script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
	function submit_soap(){
		var poke=$("#pokemon").val();
		$.ajax({
          type: "get",
          url: "pokemons.php",
          data: $("form").serialize(),
          success: function (result) {
			$("#json_response").html(result);
          },
          failure: function (result) {
            $("#json_response").html(result);
          },
        });
	}

	function submit_2(){
        $("#hello_response").html('<strong> Hello world! </strong>');
	}

	function submit_3(){
		var poke=$("#pokemon_id").val();
		$.ajax({
          type: "get",
          url: "evolutions.php",
          data: $("#evolutions").serialize(),
          success: function (result) {
			$("#evolution_response").html(result);
          },
          failure: function (result) {
            $("#evolution_response").html(result);
          },
        });
	}
	</script>
</head>
<body>
  <center>
    <h3>Send HTTP Get Request using PHP</h3>
	<form id='hello'>  
		Say Hello :
		<input type="button" value="Submit" onclick="submit_2()"/>
    </form>
    <br>-----------
	<div id="hello_response"></div>
    <form>
    Pokemon name or ID : <input name="pokemon" id="pokemon" type="text" /><br />
      <input type="button" value="Submit" onclick="submit_soap()"/>
    </form>
    <br>-----------
	<div id="json_response"></div>
	<form id="evolutions">
    Pokemon id : <input name="pokemon_id" id="pokemon_id" type="text" /><br />
      <input type="button" value="Submit" onclick="submit_3()"/>
    </form>
    <br>-----------
	<div id="evolution_response"></div>
   </center>
</body>
</html>