<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="far fa-envelope"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('newsletter_admin/exportarplanilha', '<i class="fas fa-file-excel"></i> <span>Exportar Planilha</span>', array('class' => 'btn btn-outline-success')) ?>
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
                        <th>E-mail Cadastrado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emailsNewsletter as $news) { ?>
                        <tr>
                            <td><?= $news->id ?></td>
                            <td><?= $news->email_cadastro ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>