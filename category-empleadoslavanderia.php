<?php
/**
 * The template for displaying author, categories, posttypes, taxonomies, date and tag
 */

get_header(); ?>
    <div class="container cont-archive">
        <div class="row page-content"> 

          <?php // http://www.example.com/category/custom-category
          if (is_category()) { ?>
            <h1 class="entry-title" style="margin-top:13%;">
              <strong><?php _e('Categoría:', 'Canalava'); ?></strong> <?php single_cat_title(); ?>
            </h1>
          <?php } ?>

          <?php // http://www.example.com/tag/custom-tag
          if (is_tag()) { ?>
            <h1 class="entry-title">
              <strong><?php _e('Etiqueta:', 'Canalava'); ?></strong> <?php single_tag_title(); ?></h1>
          <?php } ?>

          <?php // http://www.example.com/tag/custom-tag
          if (is_author()) { 
            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
            ?>
            <h1 class="entry-title">
              <strong><?php _e('Etiqueta:', 'Canalava'); ?></strong> <?php $curauth->user_nicename; ?>
            </h1>
          <?php } ?>

          <?php // http://www.example.com/2017/05
          if (is_date()) { ?>
            <h1 class="entry-title">
              <strong><?php _e('Entradas del ', 'Canalava'); ?></strong>
              <?php 
              
              $year = get_query_var('year');
              $month = get_query_var('monthnum');
              $day = get_query_var('day');

              if ($year > 0) { echo $year; }
              if ($month > 0) { echo '-' . str_pad($month, 2, 0, STR_PAD_LEFT); }
              if ($day > 0) { echo '-' . str_pad($day, 2, 0, STR_PAD_LEFT); }

            ?></h1>
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