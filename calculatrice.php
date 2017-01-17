<html>

<h1>Calculatrice</h1>

	<form action="resultat.php" method="post">
		<input type="text" name="num1" />

		<select name="operation">
			<option selected value="addition">+</option>
			<option value="soustraction">-</option>
			<option value="multiplication">*</option>
			<option value="division">/</option>
		</select>

		<input type="text" name="num2" />
		
		<input type="submit" value="Calculer" /><br />
	</form>



</html>