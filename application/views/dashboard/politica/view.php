<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-file-edit"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
                <?= $this->session->userdata('msg'); ?>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 col-sm-12 mb-4">
            <?php
            echo form_open();
            echo '<div class="form-group">';
            echo form_label('Título da Página', 'idTitulo');
            echo form_input(['type' => 'text', 'class' => 'form-control', 'name' => 'tituloPolitica', 'id' => 'idTitulo', 'value' => $query->titulo_politica]);
            echo '<div/>';


            echo '<div class="form-group">';
            echo form_label('Conteúdo da Página', 'idTexto');
            echo form_textarea(['type' => 'text', 'class' => 'form-control summernote', 'name' => 'conteudoPolitica', 'id' => 'idTexto', 'value' => $query->conteudo_politica]);
            echo '<div/>';

            echo form_hidden('idPolitica', $query->id);
            echo form_submit('submit', 'Atualizar Conteúdo', ['class' => 'btn btn-success mt-3 mb-3']);

            echo form_close();
            ?>
        </div>
    </div>
</main>