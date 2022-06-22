<?php get_header(); ?>

<!-- Hero -->
<section class="hero-page">
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-12 col-lg-10 offset-lg-1">scrivici per info sulla Prossima escursione</h1>
        </div>
        <div class="row">
            <h4 class="col-12 col-lg-8 offset-lg-1">Contattaci per altre informazioni e prenota!</h4>
        </div>
        <div class="row">
            <h4 class="col-12 col-lg-8 offset-lg-1">Allaccia gli scarponi e preparati alla tua prossima avventura con WILD TRACK</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 offset-lg-1">
                <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/Parentesi.png" alt="" class="parentesi">
            </div>
        </div>
    </div>
</section>

<!-- Form -->
<section class="form">
    <div class="container-fluid">
        <?php echo do_shortcode( '[contact-form-7 id="112" title="Form di contatto"]' ); ?>        
    </div>
</section>

<?php get_footer(); ?>