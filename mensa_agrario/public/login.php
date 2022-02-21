<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Mensa I.I.S Antonio Della Lucia</title>

	<h1>Login</h1>
	<form method = "get">
		Email <input type = "email" name = "email"/> </br>
		Password <input type = "password" name = "password" id = "password" />
		<input type = "button" onClick = "mostraNascondi()" value = "Mostra/Nascondi"/>  </br>
		<button type = "submit">Accedi</button>
	</form>
	Non ti ricordi la password ? Contatta la segreteria

</head>

<script>
	
	//funzione che mostra e nasconde la password 
	function mostraNascondi() {
        var input = document.getElementById('password');
        if (input.type === "password") {
          input.type = "text";
        } else {
          input.type = "password";
        }
      }
</script>
<body>

</body>
</html>