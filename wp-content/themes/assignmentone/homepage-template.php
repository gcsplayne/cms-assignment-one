<?php
    /**
     * Template Name: Homepage Layout
     * Template Post Type: page
     * 
     */
    get_header();
?>
<main class="container">
    <?php 
        while(have_posts()) : the_post();
            the_content();
        endwhile;
        wp_reset_query();
    ?>
    <section>
        <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'sativa',
            'posts_per_page' => 3
        );
        $arr_posts = new WP_QUERY($args);
        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
        ?>
        <article class="col-xs-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        //display featured image
                if (has_post_thumbnail()) :
                    the_post_thumbnail();
                endif;
        ?>
        <header class="entry-header">
            <h3><?php the_title(); ?></h3>
            </header>
            <div class="entry-content">
                <?php the_excerpt(); ?>
                
            </div>
            </article>
            <?php 
            endwhile;
            endif;
            ?>
    </section>
</main>

<?php
 get_footer(); 
?>