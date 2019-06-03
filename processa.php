<?php

//Fazer a conexão:
include_once("conexao.php");


//Recebendo os dados dos formulários:
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "Cpf: $cpf <br>";
//echo "Email: $email <br>";
//echo "Senha: $senha <br>";
//echo "Telefone: $telefone <br>";
//echo "Cadastrado com sucesso!";

//Redirecionando pra um dashboard do usuário:
header('Location: /area.php');

//Inserindo as informações no banco de dados:
$result_usuario = "INSERT INTO usuarios (nome, cpf, email, senha, telefone, created) VALUES ('$nome', '$cpf', '$email', '$senha', '$telefone', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

