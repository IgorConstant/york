<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Seja bem-vindo(a) !</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo date('d/m/Y \à\s H:i'); ?></button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body first-card">
                    <a class="atalho-add" href="banners/addbanners"><i class="fas fa-plus mr-2"></i> Adicionar novo banner</a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body first-card">
                    <a class="atalho-add" href="segmentos/addsegmentos"><i class="fas fa-plus mr-2"></i> Adicionar Segmento</a>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            
        </div>
    </div>
</main>