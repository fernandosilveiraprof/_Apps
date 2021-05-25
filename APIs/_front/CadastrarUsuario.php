





<?php require 'top.php'; ?>


<form action="">
	
	<div class="grpInputs">
		<label for="">Nome: </label>
		<input type="text" name="nome">
	</div>
	
	<div class="grpInputs">
		<label for="">CPF: </label>
		<input type="text" name="cpf">
	</div>
	
	<div class="grpInputs">
		<label for="rg">RG: </label>
		<input type="number" name="rg">
		<label for="rgdigt">Digito</label>
		<input type="text" name="rgdigt" maxlength="2" size="2" width="2" pattern="[0-9]" >
	</div>

	<div class="grpInputs">
		<label for="tel">Tel: </label>
		<input type="number" name="tel">
	</div>

	<div class="grpInputs">
		<label for="cel1">Cel 1: </label>
		<input type="number" name="cel1">
	</div>

	<div class="grpInputs">
		<label for="cel2">Cel 2: </label>
		<input type="number" name="cel2">
	</div>

	<div class="grpInputs">
		<label for="cep">CEP: </label>
		<input type="number" name="cep">
	</div>

	<div class="grpInputs">
		<label for="rua">Rua: </label>
		<input type="text" name="rua">
	</div>

	
</form>

<?php require 'CheckAccess.php'; ?>
</body>
</html>