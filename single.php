<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-lg-8 col-lg-offset-2 col-md-offset-1">
                    <?php 
                    if(have_posts()):
                        while(have_posts(  )):
                            the_post();
                            get_template_part( 'template-parts/single', get_post_format() );
                            echo osmez_post_navigation();
                            if(comments_open()):
                                comments_template();
                            endif;
                        endwhile;
                    endif;
                    ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer(); ?>