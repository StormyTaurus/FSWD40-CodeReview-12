<?php get_header(); ?>

    <!-- LOOP THROUGH THE POSTS -->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

            <div class="blog-post">
                <h2 class="blog-post-title">
                    <?php the_title();  ?>
                </h2>
                    <div class="post-thumbnails">
                        <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>
        <?php else : ?>
        <p>
            <?php __('No Page Found'); ?>
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