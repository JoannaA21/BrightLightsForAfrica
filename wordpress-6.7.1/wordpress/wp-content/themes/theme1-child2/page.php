<?php get_header(); ?>

<div class="content">
    <?php
    while (have_posts()) : the_post();
        the_title('<h1>', '</h1>'); // Page Title
        the_content(); // Page Content
    endwhile;
    ?>
</div>

<?php get_footer(); ?>
