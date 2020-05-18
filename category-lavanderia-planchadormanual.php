<?php
/**
 * The template for displaying author, categories, posttypes, taxonomies, date and tag
 */

get_header(); ?>
    <div class="container cont-archive">
        <div class="row page-content"> 

        <?php // http://www.example.com/category/custom-category
          if (is_category()) { ?>
            <h1 class="entry-title text-center" style="margin-top:13%;">
              <strong>Lavandería Planchador Con Plancha Manual</strong>
            </h1>
          <?php } ?>

          <div class="col-md-12">
            <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
              ?>
                <article <?php post_class('row'); ?>>
                  
                  

                  <div class="col-sm-12">
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="<?php echo get_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                    </div>
                   
                  </div>
                </article>

                <hr>

              <?php
              // End of the loop.
              endwhile;
            ?>

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
            </nav>

          </div>
        </div>
    </div>          
<?php get_footer(); ?>