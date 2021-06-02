
<?php require 'top.php'; ?>

<article>
	
	<form action="">
		<h1>
			Cadastrar Usuário
			<hr>
		</h1>


		<div class="grpInputs">
			<label for="">Nome: </label>
			<input type="text" name="nome">
		</div>

		<div class="grpInputs">
			<label for=""> CPF: </label>
			<input type="text" name="cpf">
		</div>

		<div class="grpInputs">
			<label for="rg"> RG: </label>
			<input type="number" name="rg"><br>
			<label for="rgdigt" > Digito: </label>
			<input type="number" name="rgdigit" style="width:40px;" >
		</div>

		<div class="grpInputs">
			<label for="ddd1"> DDD Tel 1: </label>
			<input type="number" name="ddd1" style="width:40px;"><br>

			<label for="tel"> Tel: </label>
			<input type="number" name="tel">
		</div>

		<div class="grpInputs">
			<label for="ddd2"> DDD Cel 1: </label>
			<input type="number" name="ddd2" style="width:40px;"><br>

			<label for="cel1"> Cel 1: </label>
			<input type="number" name="cel1">
		</div>

		<div class="grpInputs">
			<label for="ddd3"> DDD Cel 2: </label>
			<input type="number" name="ddd3" style="width:40px;"><br>

			<label for="cel2"> Cel 2: </label>
			<input type="number" name="cel2">
		</div>

		<div class="grpInputs">
			<label for="cep"> CEP: </label>
			<input type="number" name="cep">
		</div>

		<div class="grpInputs">
			<label for="rua"> Rua: </label>
			<input type="text" name="rua">
		</div>
		<div class="grpInputs">
			<input type="hidden" name="cliente" value="cliente" >
		</div>

	</form>
</article>

<?php require 'CheckAccess.php'; ?>


<?php 
require 'footer.php';
?>