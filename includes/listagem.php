<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($vagas as $vaga){
    $resultados .= '<tr>
                      <td>'.$vaga->id.'</td>
                      <td>'.$vaga->nome.'</td>
                      <td>'.$vaga->nascimento.'</td>
                      <td>'.$vaga->pai.'</td>
                      <td>'.$vaga->mae.'</td>
                      <td>'.$vaga->endereco.'</td>
                      <td>'.$vaga->telefone.'</td>
                      <td>'.$vaga->email.'</td>
                      <td>'.$vaga->series.'</td>
                      <td>'.$vaga->turno.'</td>
                      <td>'.$vaga->status.'</td>
                      <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($vaga->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados :
   '<tr>
      <td colspan="6" class="text-center">
          Nenhum aluno encontardo 
      </td>
     </tr>';

?>
<main>

<?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-info">(+)Novo Aluno</button>
    </a>
  </section>

  <section>
    <form method="get">

    <div class="row my-4">

    <div class="col">
      <label>Buscar por aluno</label>
      <input type="text" name="buscar" class="form-control">
    </div>

    <div class="col d-flex align-items-end" >
      <button type="submit" class="btn btn-info">Filtrar</button>
    </div>

    </div>

    </form>
  </section>

     <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Nascimento</th>
            <th>Pai</th>
            <th>Mãe</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Series</th>
            <th>Turno</th>
            <th>status</th>
            <th>ativo</th>
          </tr>
        </thead>
        <tbody>
        <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>