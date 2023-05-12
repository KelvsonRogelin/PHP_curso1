<a href="?pagina=inserir_matricula">Inserir nova matricula.</a>
<table style="border: 1px solid #ccc; width: 100%">
<tr>
    <th>Aluno</th>
    <th>Curso</th>
</tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_matriculas)){
            echo '<tr><td>'.$linha['nome'].'</td>';
            echo '<td>'.$linha['nome_curso'].'</td></tr>';
        } ?>
</table>