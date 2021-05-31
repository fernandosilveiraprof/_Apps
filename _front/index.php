<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Sistema O.S </title>
	<link rel="stylesheet" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>		
		*{

			margin: 0px ;
			padding: 0px;
			border:1px solid red;
			font-family: Arial;
			font-size: 18pt;

		}

		body{

			width: 100vw;
			height: 100vh;

		}
		form{

			display: flex; 
			flex-direction: column;

			justify-content: center; 
			align-items: center ;

		}

		.linhaForm > input{
			line-height: 30px;
		}

		@media screen and (max-width: 360px){

			.linhaForm {
				line-height: 12px;


			}
		}

	</style>	


</head>
<body style=" ">
	
	<form action="verificarlogin.php" style="width: 100%; height: 100%; ">

		<div class="linhaForm" >	

			<figure>	

				<img src="_imgs/logo.jpg" alt="Logo da Empresa" style="width: 100px ; height: 100px; ">

			</figure>	

		</div>

		<div class="linhaForm" >	

			<label for="login"> Login: </label>
			<input type="text" id="login" name="login">

		</div>

		<div class="linhaForm">	

			<label for="senha">	Senha: 	</label>
			<input type="password" name="senha" >

		</div>

		<div class="linhaForm" style="text-align: right;">	
			
			<a href=""> Esqueceu sua senha? </a> <br>

		</div>

		<div class="linhaForm" style="text-align: right;">	

			<a href=""> Cadastre-se Como Novo Usuário! </a> 

		</div>

		
	</form>
</body>
</html>


