<?php
/*
Template Name: Pagina logout
*/

get_header(); ?>
<section class="cont-paginas">
        <div class="row">
          <div class="col-md-12">

            <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
              ?>

    <article <?php post_class(); ?>>
        <section class="container ">
            <div class="row">
                <div class="col-12 text-center entry-header">
                    <h1 class="entry-title section-heading"><?php the_title(); ?></h1>
                </div>
            </div>   
            <div class="row">
                <div class="col-lg-12 entry-content">    
                    <?php the_content(); ?>
                </div>        
            </div>
        </section>
    </article>
                
              <?php
             
              endwhile;
            ?>

          </div>

        </div>
    </section>

<?php get_footer(); ?>