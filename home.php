<?php get_header(); ?>


<!-- Hero -->
<section class="hero-page">
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-lg-10 offset-lg-1">Escursioni guidate tra paesaggi alpini e natura incontaminata</h1>
        </div>
        <div class="row">
            <h4 class="col-lg-8 offset-lg-1">Allaccia gli scarponi e preparati alla tua prossima avventura con WILD TRACK!</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 offset-lg-1">
                <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/Parentesi.png" alt="" class="parentesi">
            </div>
        </div>
    </div>
</section>

<!-- Poster -->
<section class="poster">
    <div class="shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 offset-lg-1 col-11">
                    <h2>PERCHé con un accompagnatore <br>di media montagna?</h2>
                </div>
            </div>
            <div class="row">
                <div class="btn offset-lg-1 col-lg-4">
                    <a href="https://wildtrackvalsugana.it/informazioni#AMM">
                        <button> AMM</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Cards -->
<section class="escursioni">
    <div class="container-fluid">
        <div class="row">
            <h2 class="col-12 col-lg-9 offset-lg-1">TUTTE LE PROPOSTE <br>DA PERCORRERE assiemE</h2>
        </div>

        <!-- loop post -->
        <div class="cards">
            <div class="row">
                <?php 
                    $loop = new WP_Query( array( 
                        'post_type'         => 'post',
                        'post_status'       => 'publish',
                        'orderby'           => 'count',
                        'order'             => 'DESC',
                    ) );
                    if ($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
                        <article class="col-12 col-md-6 col-lg-3">  
                            <a href="<?php the_permalink();?>" class="">    
                                <div class="card">              
                                    <div class="image">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $thumbnail_alt ?>">
                                    </div>
                                    <div class="text">                                
                                        <h4 class=""><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                        <div class="text-content">
                                            <p class=""><?php echo get_the_excerpt(); ?></p>
                                            <a class="read-more" href="<?php the_permalink()?>">Read more...</a>
                                        </div>
                                    </div>
                                </div>     
                            </a>
                        </article>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p> <?php esc_html_e( 'Sorry ma non ci sono post che corrispondono a questo criterio', 'slug-theme' ); ?> </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>