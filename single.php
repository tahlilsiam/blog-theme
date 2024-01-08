<?PHP
/**
 * Main template file
 * 
 * @package siam
 */

?>

<?php get_header();?>

    <div class="main">
        <div class="container">
        <?php  if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
            <article class="post">
            <h3>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h3>
                <div class="blog-content">
                    <h4>Created by: <?php the_author(); ?><b><?php the_date('F j, Y g:i a'); ?></b></h4>
                </div>
                <?php if(has_post_thumbnail()): ;?>
                <div class="thumbnail">
                    <?php the_post_thumbnail();?>
                </div>
                <?php endif;?>
                <?php the_content();?>
                <br>
            </article>
                
            <?php endwhile;?>
        <?php else: ?>
            <?php echo wpautop('Sorry No posts found');?>

        <?php endif; ?>

        </div>
    </div>
<?php get_footer();?>
