<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Tecnofit - Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="Academia, Musculação, TecnoFit">
	  	<meta name="author" content="Tecnofit">
	  	<meta name="robots" content="index, follow">
	  	<meta name="description" content="A mistura da tecnologia com atividades físicas">
	  	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


		<!--css-->

		<style type="text/css">

    body 

    {
    	background-color: #3498db;
    }

    {
		font-family: 'FontAwesome';
	}
	.modal-login {
		width: 450px;
	}
	.modal-login .modal-content {
		padding: 40px;
		border-radius: 1px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
    .modal-login .form-group {
        margin-bottom: 20px;
    }
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 30px; 
        font-size: 15px;
        transition: all 0.5s;
	}
    .modal-login .form-control {
        font-size: 15px;
    }
    .modal-login .form-control:focus {
        border-color: #a177ff;
    }
	.modal-login .hint-text {
		text-align: center;
		padding-top: 15px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #3498db;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #8753ff;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}

		</style>
	</head>
		
	<body>

	<!--Cabeçalho-->


	<header id="header">
		<a href="index.php" class="logo"><strong>TECNOFIT</strong></a>
			<nav>
		<a href="#menu">Menu</a>
			</nav>
	</header>

	
	<!--Links do menu-->

	<nav id="menu">
		<ul class="links">
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Área do aluno</a></li>
			<li><a href="planos.php">Planos</a></li>
			<li><a href="contato.php">Contato</a></li>
		</ul>
	</nav>

	
	<!--Formulário-->
	
	<div class="modal-dialog modal-login">
	<div class="modal-content">
		
		<div class="modal-header">				
			<h4 class="modal-title">Entrar</h4>
			<button type="text" class="close" data-dismiss="modal" aria-hidden="true"></button>
		</div>
	
		<div class="modal-body">
		<div class="form-group">	
			<form>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Email">
				</div>
	
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Senha">
				</div>
				</div>
			
			</form>
			
			<!--Deixei botão Entrar nulo, pois não criei o login-->

			<form action="#" method="POST">
   				<input type="submit" class="btn btn-primary btn-block btn-lg" value="Entrar" 
         name="Submit"/>
			</form>	
				
			<form action="cadastro.php" method="POST">
    			<input type="submit" class="btn btn-primary btn-block btn-lg" value="Não possui uma conta? Cadastre-se" 
         name="Submit"/>
			</form>
				<p class="hint-text small"><a href="#">Esqueceu sua senha?</a></p>
			</div>
		</div>
	</div>
	</div> 


			<!-- Links para contato -->

		<footer id="footer">
			<ul class="icons">
				<li><a href="https://www.github.com/Mateussales1" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
				<li><a href="https://www.linkedin.com/in/mateus-sales-917657186/" target="_blank" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
				<li><a href="https://www.twitter.com/Imnotmateus" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/Imnotmateus" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/Imnotmateus" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			</ul>

			<div class="copyright">
				Este é um site estudantil | Desenvolvido por Mateus Sales
			</div>
				<img src="img/ipesu.png" height="90" width="250">	
		</footer>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
	</body>
</html>                            