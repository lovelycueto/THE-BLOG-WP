<?php get_header(); ?>

<div class="theContent">
        <h1><?php the_title(); ?></h1>
    <div class="container">
        <div class="content__inclusion">

       
        <div class="content">

            <div class="image">
                <?php echo get_the_post_thumbnail() ?>
            </div>

            <div class="paragraph">
                <?php the_content(); ?>
                    <div class="date">
                        <small><?php echo get_the_time('M-d-Y') ?></small>
                    </div>
            </div>

        </div>

        <div class="content__sidebar">
        <?php 

        $args = array(
        'post_type' =>'featuredPost',
        'posts_per_page' => 6,
        'offset'        => 3,


        );

        $newQuery = new WP_Query($args)

        ?>

        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            <div class="content__card">
                <div class="img">
                <?php echo get_the_post_thumbnail() ?>
                </div>

                <div class="title">
                   <small><?php the_title(); ?></small>

                    <div class="time">
                        <small><?php echo get_the_time('M-d-Y') ?></small>
                    </div>
                </div>

                <a href="?php echo the_permalink() ?>">Read more...</a>
            </div>

            <?php
                endwhile;
            else:
                echo "no available content";
            endif;
            wp_reset_postdata();
              ?>
        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


