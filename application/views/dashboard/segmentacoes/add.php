<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-tools"></i> <?php echo $titulo_pagina ?></h1>
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nomeSegmentacao" class="form-label">Nome da Segmentação</label>
                            <input type="text" class="form-control" id="nomeSegmentacao" name="nomeSegmentacao">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="yoastDesc" class="form-label">Yoast Descrição <span class="tooltipCustom" data-tooltip="Inclusão de descrição do Google">?</span></label>
                            <input type="text" class="form-control" id="yoastDesc" name="yoastDesc">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="yoastKeywords" class="form-label">Yoast Keywords</label>
                            <input type="text" class="form-control" id="yoastKeywords" name="yoastKeywords">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label for="editor1" class="form-label">Descrição da Segmentação</label>
                            <textarea id="editor1" class="form-control" name="descSegmentacao" placeholder="Add Body"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="destaqueSegmentacao" class="form-label">Imagem Destaque</label>
                            <br />
                            <input type="file" name="imgSegmentacao" class="form-control-file" id="destaqueSegmentacao">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Incluir Segmentação</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>