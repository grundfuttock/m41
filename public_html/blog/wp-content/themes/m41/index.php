<?php get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/img/machu_pichu_geraint_rowland919x251.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>The World According to Geoff</h1>
                    <hr class="small">
                    <span class="subheading">An occasional series of blog entries reflecting on IT and Digital Inclusion</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10">
            <div class="post-preview">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>                     
                        <?php the_excerpt('Read more..'); ?>
                        <p class="post-meta">
                            Posted in <?php the_category(' , '); ?>
                            by <?php the_author(); ?> on <?php the_date(); ?> at <?php the_time(); ?>
                        </p>
                        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                    <?php endwhile; ?>
                    <?php next_posts_link('&laquo; Previous Entries'); ?>
                <?php else : ?>
                    Not Found. Sorry, but you are looking for something that isn't here.
                <?php endif; ?>
            </div> <!-- Post previews -->
        </div> <!-- Main cols -->
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div> <!--row -->
    <hr>
</div>
<?php get_footer(); ?>
