<?php get_header( ); ?>

<div class="container content">
      <div class="main block">
        <h2>
        <?php
            if(is_category()){
            single_cat_title();
            } else if(is_author()){
             the_post(  );
             echo 'Archives By Authors: ' .get_the_author( );
             rewind_posts();  
            }else if(is_tag()){
            single_tag_title();
            } else if(is_day()){
            echo'Archives By Day: '.get_the_date();
            }else if(is_month(  )){
            echo'Archives By Month: '.get_the_date('F, Y');
            }else if(is_year( )){
            echo'Archives By Years: '.get_the_date('Y');
            } else{
                echo 'Archives';
            }

        ?>
        </h2>

        <?php if(have_posts( )) :?>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format());?>
        <?php endwhile; ?>
        <?php else :?>
          <?php echo wp_autop('Sorry, no post were found'); ?>
        <?php endif; ?>
      </div>
      <div class="side">
                <?php if (is_active_sidebar( 'sidebar' )) : ?>
                  <?php dynamic_sidebar( 'sidebar') ;?>
                <?php endif; ?>
              </div>  
    </div>

    <?php get_footer( ); ?>