<?php get_header(); ?>


<!-- Hero -->
<section class="hero-page">
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-lg-10 offset-lg-1">QUALE SARà la TUA PROSSIMA AVVENTURA?</h1>
        </div>
        <div class="row">
            <h4 class="col-lg-8 offset-lg-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. TRENTINO</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 offset-lg-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="133" height="32.828" viewBox="0 0 133 32.828">
                    <defs><clipPath id="clip-path"><rect id="Rettangolo_8" data-name="Rettangolo 8" width="133" height="32.828" fill="#fff"/></clipPath></defs><g id="Raggruppa_8" data-name="Raggruppa 8" transform="translate(0 5)"><g id="Raggruppa_7" data-name="Raggruppa 7" transform="translate(0 -5)" clip-path="url(#clip-path)"><path id="Tracciato_13" data-name="Tracciato 13" d="M54.659,10.361a11.894,11.894,0,0,1,11.479,7.652H66.5c.37-.828,4.043-7.652,11.937-7.652h29.315c9.364,0,11.406-1.865,12.966-9.059A1.49,1.49,0,0,1,122.373.007l9.059.37a1.567,1.567,0,0,1,1.559,1.841c-.362,9.5-5.048,19.581-25.24,19.581H79.7c-3.947,0-6.149,8.914-6.334,9.742A1.6,1.6,0,0,1,71.8,32.835H60.744a1.627,1.627,0,0,1-1.656-1.383c-.362-2.219-2.106-9.654-6.238-9.654H25.167C4.967,21.8.377,11.719.007,2.218A1.735,1.735,0,0,1,1.575.377l9.059-.37A1.644,1.644,0,0,1,12.378,1.3C13.849,8.5,15.8,10.361,25.167,10.361Z" transform="translate(0.001 -0.003)" fill="#fff"/></g></g>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Poster -->
<section class="poster">
    <div class="shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <h2>PERCHé con un accompagnatore <br>di media montagna trentino?</h2>
                </div>
            </div>
            <div class="row">
                <div class="btn offset-lg-1 col-lg-4">
                    <a href="">
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
                        <article class="col-12 col-lg-3">  
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