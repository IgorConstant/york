<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-tools"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('linhas_admin/addlinhas', '<i class="fas fa-plus-circle"></i> <span>Incluir Linha</span>', array('class' => 'btn btn-outline-success')) ?>
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
                        <th>Nome Linha</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($app_linhas as $l) { ?>
                        <tr>
                            <td><?= $l->id ?></td>
                            <td><?= $l->nome_linha ?></td>
                            <td class="text-center">
                                <?= anchor('linhas_admin/editarlinha/' . $l->id, '<i class="far fa-edit"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('linhas_admin/deletarlinha/' . $l->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>