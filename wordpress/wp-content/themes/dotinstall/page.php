<?php get_header(); ?>
<div id="main" class="container">
    <div id="posts">

        <?php 
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>

        <div class="post">
            <div class="post-header">
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
            </div>
            <div class="post-content">

                <div class="post-body">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <?php
    endwhile;
else :
    ?>
        <p>No more pages.</p>

        <?php
    endif;
    ?>



    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?> 