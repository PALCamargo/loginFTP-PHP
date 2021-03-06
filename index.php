<?php
	session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<link rel="shortcut icon" href="../img/favicon.ico" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

		<title>Login | Backup</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
		<style>
			html,body {
				height: 100%;
			}

			body {
				display: -ms-flexbox;
				display: -webkit-box;
				display: flex;
				-ms-flex-align: center;
				-ms-flex-pack: center;
				-webkit-box-align: center;
				align-items: center;
				-webkit-box-pack: center;
				justify-content: center;
				padding-top: 40px;
				padding-bottom: 40px;
				background-color: #f5f5f5;
			}

			.form-signin {
				width: 100%;
				max-width: 330px;
				padding: 15px;
				margin: 0 auto;
			}
			.form-signin .checkbox {
				font-weight: 400;
			}
			.form-signin .form-control {
				position: relative;
				box-sizing: border-box;
				height: auto;
				padding: 10px;
				font-size: 16px;
			}
			.form-signin .form-control:focus {
				z-index: 2;
			}
			.form-signin input[type="email"] {
				margin-bottom: -1px;
				border-bottom-right-radius: 0;
				border-bottom-left-radius: 0;
			}
			.form-signin input[type="password"] {
				margin-bottom: 10px;
				border-top-left-radius: 0;
				border-top-right-radius: 0;
			}
		</style>

		<script type="text/javascript">
			$(document).ready(function(){  // A DIFERENÇA ESTA AQUI, EXECUTA QUANDO O DOCUMENTO ESTA "PRONTO"
				window.setTimeout(function() { // hide alert message 
					$(".alert").addClass('in');
					$(".alert").removeClass('show');
				}, 2000);
			});
		</script>
	</head>

    <body class="text-center">
        <form class="form-signin" action="backup" method="POST">
            <img class="mb-4" src="img/milbrTI-logo.png" alt="" width="300">
            <h1 class="h3 mb-3 font-weight-normal">Controle de Backup</h1>
            <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
            <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Senha" required>
			<input type="hidden" value="logado" name="logado">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">&copy; Desenvolvido por Grupo Milbr</p>
        </form>

    </body>
</html>
