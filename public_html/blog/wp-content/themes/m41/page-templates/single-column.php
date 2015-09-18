<?php /* Template Name: Single column page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>       
        <!-- Page Content -->
        <div class="container">
            <header>
                <div class="jumbotron">
                    <div class="container">
                        <?php
                        // check if the post or page has a Featured Image assigned to it.
                        if (has_post_thumbnail()) {
                            $featured_image = get_the_post_thumbnail();
                        }
                        ?>
                            <img class="img-responsive" <?php echo ($featured_image); ?>
                             <h1 class="post-title"><?php the_title(); ?></h1>
                            <h2 class="subheading"><?php echo get_post_meta(get_the_id(), 'subtitle', true) ?></h2>
                    </div>
                </div>
            </header>
            <?php the_content(); ?>
        </div> <!-- Page content Container -->
    <?php endwhile; ?>
<?php else : ?>
    Not Found. Sorry, but you are looking for something that isn't here.
<?php endif; ?>

<?php get_footer(); ?>
