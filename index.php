<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Home | CrontrolFip</title>
		<meta charset="utf-8">
		<style type="text/css">
			body{
				background-color: #000;
				color: #fff;
			}
			a{
				padding: 5px;
				color: #fff;
				text-decoration: none;
				border-bottom: 2px solid #870000;
				border-radius: 10px;
				transition: .5s;
			}
			a:hover{
				background-color: #870000;
			}
			h1,h2{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>ControlFip</h1>
		<h2>Sistema de Controle Financeiro Pessoal</h2>
		<div>
			<a href="contas_apagar.php">Contas a Pagar</a>
			<a href="contas_receber.php">Contas a Receber</a>
		</div>
		<div>
			<table>
				<thead>
					<tr>
						<th>Mês</th>
						<th>Total Previsto</th>
						<th>Total Real</th>
						<th>Saldo na Carteira</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Abril</td>
						<td>R$ 5000.00</td>
						<td>R$ 7000.00</td>
						<td>R$ 4200.00</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php 
		
		 ?>
	</body>
</html>