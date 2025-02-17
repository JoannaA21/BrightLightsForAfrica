<?php get_header(); ?>

<div class="container">
    <main>
        <?php
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>'); // Display Page Title
            the_content(); // Display Page Content
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>