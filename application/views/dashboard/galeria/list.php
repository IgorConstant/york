<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-photo-video"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('galeria/adicionargaleria', '<i class="fas fa-plus-circle"></i> <span>Criar Galeria</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <?php foreach ($app_gallery as $img) { ?>
            <div class="col-md-4">
                <div class="container">
                    <img src="<?php echo base_url('upload/galeria/' . $img->fotos) ?>" alt="<?= $img->fotos ?>" class="image img-fluid" style="width:100%">
                    <div class="middle">
                        <div class="text">
                            <?= anchor('galeria/deletargaleria/' . $img->id, '<i class="fas fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>