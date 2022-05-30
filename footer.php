<footer>

    <section class="container-fluid">
        <div class="cover">
        </div>

        <div class="cta row">
            <h2 class="col-lg-8"> Vuoi sapere di più?</h2>
            <a href="" class="col-lg-2 offset-lg-1">
                <button> Contatti </button>
            </a>
        </div>
    </section>

    <div class="contact container-fluid">
        <div class="contenuti row">
            <a href="<?php echo get_permalink( get_page_by_path( 'contatti' ) ); ?>" class="col-6 order-1 col-lg-2 order-lg-1">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>\img\logo\logo-footer.png" alt="">
                </div>
            </a>

            <a href="" class="social col-2 offset-1 order-2 col-lg-1 offset-lg-1 order-lg-2">
                <div>
                    <svg id="Componente_160_1" data-name="Componente 160 – 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rettangolo_9" data-name="Rettangolo 9" width="50" height="50" fill="#fff"/>
                            </clipPath>
                        </defs>
                        <g id="Raggruppa_9" data-name="Raggruppa 9" clip-path="url(#clip-path)">
                            <path id="Tracciato_14" data-name="Tracciato 14" d="M24.9,4.487c6.651,0,7.435.026,10.061.144a13.728,13.728,0,0,1,4.625.861,7.7,7.7,0,0,1,2.866,1.861,7.725,7.725,0,0,1,1.861,2.861,13.929,13.929,0,0,1,.856,4.625c.118,2.625.144,3.415.144,10.061s-.026,7.44-.144,10.066a13.96,13.96,0,0,1-.856,4.625,8.229,8.229,0,0,1-4.728,4.723,13.632,13.632,0,0,1-4.625.856c-2.625.123-3.41.149-10.061.149s-7.435-.026-10.061-.149a13.632,13.632,0,0,1-4.625-.856,7.7,7.7,0,0,1-2.866-1.861,7.789,7.789,0,0,1-1.861-2.861,13.96,13.96,0,0,1-.856-4.625c-.118-2.625-.144-3.415-.144-10.066s.026-7.435.144-10.061a13.929,13.929,0,0,1,.856-4.625A7.789,7.789,0,0,1,7.348,7.353a7.7,7.7,0,0,1,2.866-1.861A13.728,13.728,0,0,1,14.84,4.63c2.625-.118,3.41-.144,10.061-.144M24.9,0c-6.764,0-7.61.031-10.266.149A18.341,18.341,0,0,0,8.589,1.308a12.209,12.209,0,0,0-4.41,2.872,12.209,12.209,0,0,0-2.872,4.41A18.21,18.21,0,0,0,.149,14.635C.026,17.291,0,18.137,0,24.9s.026,7.615.149,10.271a18.21,18.21,0,0,0,1.159,6.046,12.209,12.209,0,0,0,2.872,4.41A12.209,12.209,0,0,0,8.589,48.5a18.341,18.341,0,0,0,6.046,1.159c2.656.118,3.5.149,10.266.149s7.61-.031,10.266-.149A18.341,18.341,0,0,0,41.212,48.5a12.729,12.729,0,0,0,7.281-7.281,18.08,18.08,0,0,0,1.159-6.046c.123-2.656.149-3.507.149-10.271s-.026-7.61-.149-10.266a18.08,18.08,0,0,0-1.159-6.046,12.209,12.209,0,0,0-2.872-4.41,12.209,12.209,0,0,0-4.41-2.872A18.341,18.341,0,0,0,35.166.149C32.51.031,31.664,0,24.9,0" transform="translate(0 0.001)" fill="#fff"/>
                            <path id="Tracciato_15" data-name="Tracciato 15" d="M15.151,2.362A12.789,12.789,0,1,0,27.939,15.151,12.791,12.791,0,0,0,15.151,2.362m0,21.091a8.3,8.3,0,1,1,8.3-8.3,8.3,8.3,0,0,1-8.3,8.3" transform="translate(9.75 9.751)" fill="#fff"/>
                            <path id="Tracciato_16" data-name="Tracciato 16" d="M12.844,4.671a2.99,2.99,0,1,1-2.99-2.99,2.989,2.989,0,0,1,2.99,2.99" transform="translate(28.337 6.94)" fill="#fff"/>
                        </g>
                    </svg>
                </div>
            </a>

            <div class="contatti col-8 offset-0 order-4 col-lg-3 order-lg-3">
                <a href="tel:3473411518" target="_blank"> <p>Matteo +39 347 3411518</p></a>
                <a href="mailto:wildtrackvalsugana@gmail.com" target="_blank"> <p>wildtrackvalsugana@gmail.com</p></a>
            </div>

            <div class="link col-4 offset-0 order-5 col-lg-2 order-lg-4">
                <a href="<?php echo get_permalink( get_page_by_path( 'privacy' ) ); ?>"> <h6> Privacy & Cookies </h6>  </a>
                <a href="" target="_blank"> <h6> 2022 credits </h6> </a>
            </div>

            <div class="link col-2 order-3 offset-0 col-lg-1 offset-lg-1 order-lg-5">
                <a href="" > <h5> ITA </h5>  </a>
                <a href="" target="_blank"> <h5> ENG</h5> </a>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>

</footer>

</main>

</body>
</html>