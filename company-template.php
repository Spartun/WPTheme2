<?php
/*
Template Name: Company Layout

*/ 
?>

<?php get_header( ); ?>

<div class="container content">
      <div class="main block">
        <?php if(have_posts( )) :?>
            <?php while(have_posts()) : the_post(); ?>
             <article class='page'>
                <h2> <?php the_title(  );?></h2>
                <p class="phone">
                    1-8000-2254-251
                </p>
                <?php the_content(); ?>
             </article>
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