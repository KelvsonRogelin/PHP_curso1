<?php
# conexão com banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
$query = "select * from cursos";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "select * from alunos";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT a.nome, b.nome_curso FROM alunos a, cursos b ,  alunos_cursos c
WHERE c.id_aluno = a.id_aluno and c.id_curso = b.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);