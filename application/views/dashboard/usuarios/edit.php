<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-users"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>


    <div class="col-12 col-sm-12">
        <?php echo form_open() ?>
        <div class="form-group mb-3">
            <?php echo form_label('Nome') ?>
            <?php echo form_input([
                'type' => 'text',
                'class' => 'form-control',
                'name' => 'nome',
                'required' => '',
                'autocomplete' => 'off',
                'value' => $query->nome_usuario
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?php echo form_label('E-mail') ?>
            <?php echo form_input([
                'type' => 'email',
                'class' => 'form-control',
                'name' => 'email',
                'required' => '',
                'autocomplete' => 'off',
                'value' => $query->email

            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?php echo form_label('Senha') ?> <span class="tooltipCustom" data-tooltip="A senha deve ter no máximo 12 caracteres.">?</span>
            <?php echo form_input([
                'type' => 'password',
                'class' => 'form-control',
                'name' => 'senha',
                'required' => '',
                'value' => $query->senha
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?php echo form_hidden('id', $query->id); ?>
        </div>

        <hr />
        <?php echo form_submit('submit', 'Editar Usuário', ['class' => 'btn btn-success mt-3 mb-3']) ?>

        <?php echo form_close() ?>

    </div>

</main>