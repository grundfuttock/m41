<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <!-- fiddle around to get best image size for post header background  -->
        <?php
        $header_img_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        $header_img = $header_img_array[0];
        ?>
        <header class="intro-header" style="background-image: url('<?php echo $header_img ?>')" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-heading">
                            <h2><class="post-title"><?php the_title(); ?></h2>
                            <h2 class="subheading"></h2>
                            <span class="meta">
                                Posted in <?php the_category(' , '); ?>
                                by <?php the_author(); ?> on <?php the_date(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
        <nav>
            <ul class="pager">
                <li><a href="#">Top</a></li>
                <li><a href="blog.html">Index</a></li>
            </ul>
            <ul class="pager">
                <li><?php previous_post_link(); ?> </li>
                <li><?php next_post_link(); ?> </li>
            </ul>
        </nav>
    <?php endwhile; ?>
<?php else : ?>
    Not Found. Sorry, but you are looking for something that isn't here.
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
