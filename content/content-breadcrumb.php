<div class="row row-breadcrumb">
    <div class="container">
        <div class="shodow-top"></div>
        <div class="col-xs-6 col-md-6">
            <h1><?php echo get_the_title() ?></h1>
        </div>
        <div class="col-xs-6 col-md-6 breadcrumb">
            <p>
                <a href="<?php echo get_site_url() ?>">Accueil</a>
                <span class="separator"> > </span>
                <span class="current-page"><?php echo get_the_title() ?></span>
            </p>
        </div>
    </div>
</div>