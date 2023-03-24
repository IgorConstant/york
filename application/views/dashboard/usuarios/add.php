<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-users"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
                <?= $this->session->userdata('msg'); ?>
            </div>
        </div>
    </section>

    <div class="col-12 col-sm-12">
        <?= form_open() ?>
        <div class="form-group mb-3">
            <?= form_label('Nome') ?>
            <?= form_input([
                'type' => 'text',
                'class' => 'form-control',
                'name' => 'nome',
                'required' => '',
                'autocomplete' => 'off'
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('E-mail') ?>
            <?= form_input([
                'type' => 'email',
                'class' => 'form-control',
                'name' => 'email',
                'required' => '',
                'autocomplete' => 'off'
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('Senha') ?> <span class="tooltipCustom" data-tooltip="A senha deve ter no máximo 12 caracteres.">?</span>
            <?= form_input([
                'type' => 'password',
                'class' => 'form-control',
                'name' => 'senha',
                'required' => ''
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('Confirme a Senha') ?> <span class="tooltipCustom" data-tooltip="A senha precisa ser igual ao campo anterior.">?</span>
            <?= form_input([
                'type' => 'password',
                'class' => 'form-control',
                'name' => 'senha2',
                'required' => ''
            ]) ?>
        </div>
        <hr />
        <?= form_submit('submit', 'Adicionar Novo Usuário', ['class' => 'btn btn-success mt-3 mb-3']) ?>

        <?= form_close() ?>
    </div>
</main>