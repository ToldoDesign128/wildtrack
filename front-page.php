<?php get_header(); ?>

<!-- Hero -->
<section class="hero">
    <div class="shadow">
        <div class="container-fluid">
            <div class="row">
                <h1 class="col-12 col-lg-10 offset-lg-1">Mountain hiking <br> & Nature experience</h1>
            </div>
            <div class="row">
                <div class="col-lg-2 offset-lg-1">
                    <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/Parentesi.png" alt="" class="parentesi">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Poster -->
<section class="poster">
    <div class="shadow">
        <div class="container-fluid">
            <div class="row">
            <?php $sticky = get_option( 'sticky_posts' );
                    rsort( $sticky );
                    $args = array(
                        'post__in' => $sticky,
                        'posts_per_page' => 1
                    );
                    $sticky_query = new WP_Query( $args );
                    while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

                            <div class="col-12 col-lg-5 offset-lg-1 ">
                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                <a href="<?php the_permalink(); ?>"><button> Scopri l’escursione </button></a>
                            </div>

                    <?php endwhile;
                    wp_reset_postdata();
                ?>
            </div>            
        </div>
    </div>

</section>

<!-- Single carousel -->
<section class="carousel">
    <div class="container-fluid">
        <div class="row align-items-center">
            <h2 class=" col-12 col-lg-8 offset-lg-1">TUTTE LE PROPOSTE <br>DA PERCORRERE assiemE</h2>
            <a href="<?php echo get_permalink( get_page_by_path( 'escursioni' ) ); ?>" class="col-6 col-lg-2 ">
                <button>Escursioni</button>
            </a>
        </div>
    </div>

    <section class="cards swiper mySwiper">
        <div class="row cards__slider swiper-wrapper">

            <?php 
                $loop = new WP_Query( array( 
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'orderby'           => 'count',
                    'order'             => 'DESC',
                ) );
                if ($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="swiper-slide">
                        <article class="col-12 col-lg-4">  
                            <a href="<?php the_permalink();?>" class="">    
                                <div class="card">              
                                    <div class="image">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $thumbnail_alt ?>">
                                    </div>
                                    <div class="text">                                
                                        <h4 class=""><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                        <div class="text-content">
                                            <p class=""><?php echo get_the_excerpt(); ?></p>
                                            <a class="read-more" href="<?php the_permalink();?>">Read more...</a>
                                        </div>
                                    </div>
                                </div>     
                            </a>
                        </article>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p> <?php esc_html_e( 'Sorry ma non ci sono post che corrispondono a questo criterio', 'slug-theme' ); ?> </p>
            <?php endif; ?>

        </div>

        <div class="row">
            <div class="carousel__button col-lg-3 offset-lg-9 offset-md-8">
                <button class="swiper-button-prev"> <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/arrow-1.png" alt="arrow-prev"> </button>
                <button class="swiper-button-next"> <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/arrow-2.png" alt="arrow-next"> </button>
            </div>
        </div>


    </section>
</section>


<!-- Poster block-->
<section class="banner1"> <!-- blocco 1-->
    <div class="row">
        <div class="col-12 col-md-4 col-lg-5 image">
            <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/banner.png" alt="Alla scoperta del territorio">
        </div>

        <div class="col-12 col-md-8 col-lg-7">
            <div class="row">
                <h2 class="col-lg-10 offset-lg-1">ALLA SCOPERTA <br> DEL Territorio</h2>
            </div>
            <div class="row">
                <a href="https://wildtrackvalsugana.it/informazioni#Territorio" class="btn offset-lg-1">
                    <button>Territorio</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="banner2"> <!-- blocco 2-->
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 image">
            <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/banner2.png" alt="Il progetto Wildtrack" class="banner__img">
        </div>

        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
            <div class="row">
                <h2 class="col">IL PROGETTO <br>WILDTRACK</h2>
            </div>
            <div class="row">
                <a href="<?php echo get_permalink( get_page_by_path( 'informazioni' ) ); ?>" class="btn">
                    <button>Chi Siamo</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="banner3"> <!-- blocco 3-->
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 offset-lg-1">
            <div class="row">
                <h2 class="col-12 col-md-11 col-lg-9 offset-md-1 offset-lg-0">PERCHè scegliere <br>Un AMM?</h2>
            </div>
            <div class="row">
                <a href="https://wildtrackvalsugana.it/informazioni#AMM" class="btn offset-md-1 offset-lg-0">
                    <button>AMM</button>
                </a>
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-5 image">
            <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/banner3.png" alt="Perchè sceglere un accompagnatore di media montagna">
        </div>
    </div>
</section>


<!-- Why -->
<section class="why">
    <div class="why-content">        
        <div class="row">
            <div class="col-12 col-md-7 offset-md-1 col-lg-7 offset-lg-1">

                <div class="row">
                    <h2>PERCHé un’avventura <br>In TRENTINo?</h2>
                </div>

                <div class="btn">
                    <a href="<?php echo get_permalink( get_page_by_path( 'informazioni' ) ); ?>">
                        <button>chi siamo</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/italia.png" alt="">
            </div>
        </div>
    </div>   
</section>

<?php get_footer(); ?>