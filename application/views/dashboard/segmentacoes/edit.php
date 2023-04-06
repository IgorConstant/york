<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-tools"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>


    <div class="row">
        <div class="col-12 col-sm-12">
            <form action="segmentos_admin/editarseg/<?php echo ($query->id) ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nomeSegmentacao" class="form-label">Nome da Segmentação</label>
                            <input type="text" class="form-control" id="nomeSegmentacao" name="nomeSegmentacao" value="<?php echo $query->nome_segmentacao ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="yoastDesc" class="form-label">Yoast Descrição <span class="tooltipCustom" data-tooltip="Inclusão de descrição do Google">?</span></label>
                            <input type="text" class="form-control" id="yoastDesc" name="yoastDesc" value="<?php echo $query->yoast_description ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="yoastKeywords" class="form-label">Yoast Keywords</label>
                            <input type="text" class="form-control" id="yoastKeywords" name="yoastKeywords" value="<?php echo $query->yoast_keywords ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label for="editor1" class="form-label">Descrição da Segmentação</label>
                            <textarea id="editor1" class="form-control" name="descSegmentacao" placeholder="Add Body">
                                <?php echo $query->desc_segmentacao ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= form_label('Destaque') ?>
                        <br />
                        <img class="img-fluid foto-destaque" width="200px" src="<?php echo base_url('upload/galeria/' . $query->foto_destaque) ?>" alt="<?= $query->foto_destaque ?>">
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar foto</button>
                        <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                        <br>
                        <input type="file" name="fotoDestaque" class="form-control-file input-change-file hide" id="exampleFormControlFile1" required="" disabled="">
                    </div>

                    <div class="col-12">
                        <input type="hidden" id="idSegmento" name="idSegmento" value="<?= $query->id ?>">
                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Editar Segmento</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>