<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-home"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('banners/addbanners', '<i class="fas fa-plus-circle"></i> <span>Incluir Banner</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= $this->session->userdata('msg', array('class' => 'mb-5')); ?>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título Banner</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($app_banners as $banner) { ?>
                        <tr>
                            <td><?= $banner->id ?></td>
                            <td><?= $banner->titulo_banner ?></td>
                            <td class="text-center">
                                <button style="background: transparent;border: none;" type="button" data-bs-toggle="modal" data-bs-target="<?= '#modal' . $banner->id ?>"><i class="fas fa-eye"></i></button>
                                <?= anchor('banners/deletarbanners/' . $banner->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="<?= 'modal' . $banner->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?= $banner->titulo_banner ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?= base_url('upload/banners/' . $banner->imagem) ?>" alt="<?= $banner->titulo_banner ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>