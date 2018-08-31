<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-escale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="JS/jquery.mask.min.js"></script>
<head>
	<title></title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-sm-12 col-md-6 col-12" > 
					<img class="back img-fluid img-responsive displaynone" src="img/background.jpg">
		</div>
		<div class="col-lg-6 col-sm-12 col-md-6 col-12" >
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-8 text-center" >
					<img src="img/ethinkers.jpg" class="img-fluid img-responsive ">
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-8" >
					<h5 class="text-center titulo">Por favor, complete o cadastro abaixo</h5>
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-4 col-md-4 col-6">
					<input class="form-control border-none" placeholder="Nome" type="text" id="nome">
				</div>
				<div class="col-lg-4 col-sm-4 col-md-4 col-6">
					<input class="form-control border-none" placeholder="Sobrenome" type="text" id="sobrenome">
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-12">
					<input class="form-control border-none" placeholder="E-mail" type="text" id="email" onblur="test()">
					<p id="pemail" style="display: none">e-mail inválido, não possui @ ou incompleto</p>
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-12">
					<input class="form-control border-none" placeholder="Telefone" type="text" id="telefone">
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-12">
					<input class="form-control border-none" placeholder="CPF" type="text" id="cpf">
				</div>
			</div>
			<br><br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-12 aceito">
					<input type="checkbox" class="chkpad" name="aceito" value="aceito">Eu aceito os termos e condições
				</div>
			</div>
			<br><br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-12 text-center">
					<button type="Submit" name="botao" id="botaoform" class="btn btn-info botao"><span id="cadBotao">Cadastrar</span>
					</button>
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-sm-8 col-md-8 col-12 text-center">
					<a href="index.php" >Não tem conta? Cadastre-se agora!</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#telefone").mask("(00) 00000-0000");
	$("#cpf").mask("000.000.000-00");

	
	function isValidEmailAddress(email) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(email);
	} 

	function test(){
		
		var email2 = $("#email").val();

		if(isValidEmailAddress(email2)){
			document.getElementById("pemail").style.display="none";
			$("#botaoform").addClass("botao");
			$("#botaoform").removeClass("botaodes");
			$("#botaoform").addClass("botaoGif");
			$("#cadBotao").addClass("cadBotao");
			
		}else{
			document.getElementById("pemail").style.display="block";
			$("#botaoform").removeClass("botao");
			$("#botaoform").addClass("botaodes");
			$("#botaoform").removeClass("botaoGif");
			$("#cadBotao").removeClass("cadBotao");

		}
	}
	

	

</script>
</body>

</html>