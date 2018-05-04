	<!DOCTYPE html>
	<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Escola</title>
		<link rel="icon" href="https://1.bp.blogspot.com/-1CKbnU5Uc40/V6oxJZML28I/AAAAAAABdNw/bpb9Ks5imHAkhHTR-jS-KauFV0RwiVSIgCLcB/s320/1vv5gh.png" type="imagem/gif">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <link href="css/margemDiv.css" rel="stylesheet">

	</head>
	<body>

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/inicio">Escola</a>   
				</div>  
				<ul class="nav navbar-nav"> 
					<li class="active"><a href="#">Aluno</a></li>
					<li><a href="/aluno">Profissional</a></li>
					<li><a href="#">Classes</a></li>    
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Atendimentos<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Lançamento de presença</a></li>
							<li><a href="#">Registro Entrada/Saída</a></li>
							<li><a href="#">Migração de aluno entre salas</a></li>
							<li><a href="#">Registro de atividades do grupo</a></li>
							<li><a href="#">Planejamento de aula(horários)</a></li>
						</ul>
					</ul>
				</div>
			</nav>

			<div>
					<ul>
						<li><a href="/cadastrarAluno">Cadastrar</a></li>
						<li><a href="/alunos">Todos</a></li>
					</ul>
				</div>




			<div id="margemDiv" class="margemDiv">
				<h2 align="center">Alunos</h2>

				<div>
					<form action="/action_page.php">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Buscar" name="search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</div>

				<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr>
								<th>Matrícula</th>
								<th>Nome</th>
								<th>Turma</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Anna</td>
								<td>Pitt</td>
								<td>
									<span class="glyphicon glyphicon-user"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>



			</body>
			</html>
