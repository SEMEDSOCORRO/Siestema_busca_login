<main>

<section>
    <a href="index.php">
      <button class="btn btn-info">Voltar</button>
    </a>
</section>

<h2 class="mt-3">Cadastre o novo aluno</h2>

<form method="post">

    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" value="<?=$obVaga->nome?>">
    </div>

    <div class="form-group">
      <label>CPF</label>
      <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" value="<?=$obVaga->cpf?>">
    </div>

    <div class="form-group">
      <label>Nascimento</label>
      <input type="text" class="form-control date-mask" name="nascimento"  value="<?=$obVaga->nascimento?>">
    </div>

    <div class="form-group">
      <label>Pai</label>
      <input type="text" class="form-control" name="Pai" value="<?=$obVaga->pai?>">
    </div>

    <div class="form-group">
      <label>Mãe</label>
      <input type="text" class="form-control" name="Mãe" value="<?=$obVaga->mae?>">
      </div>

      <div class="form-group">
      <label>Endereço</label>
      <input type="text" class="form-control" name="Endereço" value="<?=$obVaga->endereco?>">
    </div>

    <div class="form-group">
      <label>Telefone</label>
      <input type="text" class="form-control phone-ddd-mask" name="Telefone" value="<?=$obVaga->telefone?>">
    </div>

    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" value="<?=$obVaga->email?>">
    </div>

    <div class="form-group">
      <label> Series</label>
      <input type="text" class="form-control " name="Series" value="<?=$obVaga->series?>">
    </div>

    <div class="form-group">
      <label>Turno</label>
      <input type="text" class="form-control" name="turno" value="<?=$obVaga->turno?>">
    </div>

    <div class="form-group">
      <label>Status</label>

      <div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="s" checked> Ativo
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>> Inativo
            </label>
          </div>
      </div>
    
    <br>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Enviar</button>
    </div>

  </form>


</main>