<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
<h2>advertise with us</h2>

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>