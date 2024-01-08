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
