<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <title>Lucas</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

		<nav>
			<div class = "container">
				<ul class="nav nav-pills">
			  	<li role="presentation"><a href="#">Início</a></li>
			  	<li role="presentation"><a href="#">Sobre</a></li>
				</ul>
			</div>
		</nav>

		<div class = "jumbotron">
			<section class="container">
				<h2>Gabriel Santos</h2>
				<p>Designer, Ilustrador, Front-end Developer.</p>
			</section>
		</div>

		<!-- main -->
		<section class = "row">
			<div class = "container">
				<div class = "col-md-6">
					<p><b>Designer</b></p>
				</div>
				<div class = "col-md-6">
					<p><b>Developer</b></p>
				</div>
			</div>
		</section>

		<!-- contato -->

		<section class  = "container">
			<form>
				<div class = "form-group">
					<label for ="nome">Nome</label>
					<input type = "text" name = "nome">
					<label for ="email">E-mail</label>
					<input type = "text" name = "email">
					<select>
							<option value = "1">Selecione o Destinatário</option>
							<option value = "1">Lucas Santos</option>
					</select>
					<label for ="mensagem">Mensagem</label>
					<textarea class = "form-control" name = "mensagem"></textarea>
					<input type = "submit" name = "submit" class = "btn btn-info">
				</div>
			</form>
		</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
