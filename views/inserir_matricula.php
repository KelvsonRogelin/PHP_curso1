<h1>Inserir nova matricula</h1>
<br>
<p>Selecione o aluno</p>
<form method="post" action="processa_matricula.php">
    <select name="escolha_aluno" >
       <option>Selecione um Aluno</option>
       <?php
             while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome'].'</option>';
            }
        ?> 
    </select>
    <br><br>
    <p>Selecione o Curso</p>
    <select name="escolha_curso">
        <option>Selecione um Curso</option>
        <?php
             while($linha = mysqli_fetch_array($consulta_cursos)){
             echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
             }
        ?>
    </select>
    <br><br>
    <input type="submit" value='Matricular aluno no curso'>
</form>