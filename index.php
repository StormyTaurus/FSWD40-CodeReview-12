<?php get_header(); ?>

    <!-- LOOP THROUGH THE POSTS -->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title();  ?>
                    </a>
                </h2>
                <p class="blog-post-meta"><?php the_time('F j, Y g:i'); ?> by 
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                </p>
                    <div class="post-thumbnails">
                        <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                    <?php
                    //the_content(); 
                    ?>
                    <?php the_excerpt(); ?>
            </div>

        <?php endwhile; ?>
        <?php else : ?>
        <p>
            <?php __('No Posts Found'); ?>
        </p>
        <?php endif; ?>
    <!-- END OF POSTS LOOP -->


    </div>
    <!-- /.blog-main -->


<!-- create sidebar for widgets -->
    <aside class="col-md-4">
        <div class="blog-sidebar">
            <?php dynamic_sidebar('sidebar'); ?>
        </div>
    </aside>
    <!-- /.blog-sidebar -->

        </div>
        <!-- /.row -->

    </main>
    <!-- /.container -->

<?php get_footer(); ?>