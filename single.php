<?php get_header(); ?>

<main class="container-fluid single">

    <?php if (have_posts(  )) :?><?php while(have_posts(  )) : the_post(  );?>

    <!--Loop Content-->

    <article class="col-12 article-content">
        <div class="hero-single" style= "background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
            <div class="row">
                <div class="col-12">
                    <h1 class="col-12 col-lg-10 offset-lg-1"> <?php the_title(); ?> </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 offset-lg-1">
                    <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/Parentesi.png" alt="" class="parentesi">
                </div>
            </div>
        </div>

        <div class="hero-content">
                <?php the_content(); ?>
        </div>        
    </article>

    <?php endwhile; ?>
        
        <?php else : ?>
            <p> <?php esc_html_e( 'Sorry ma non ci sono post che corrispondono a questo criterio', 'slug-theme' ); ?> </p>
        <?php endif; ?>   


    <section class="banner1"> <!-- blocco 1-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 image">
                <img src="https://wildtrackvalsugana.it/wp-content/uploads/2022/06/banner.png" alt="">
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="row">
                    <h2 class="col-lg-10 offset-md-2 offset-lg-1">SEI DEI <br>NOSTRI?</h2>
                </div>
                <div class="row">
                    <a href="<?php echo get_permalink( get_page_by_path( 'contatti' ) ); ?>" class="btn offset-md-2 offset-lg-1">
                        <button>Partecipa</button>
                    </a>
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
    
</main>

<?php get_footer(); ?>