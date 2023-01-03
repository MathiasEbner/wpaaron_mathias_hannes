<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Want to learn how to dance? Book a workshop with Aaron!">
        <meta name="keywords" content="learning, choreographer, dance, workshops, aaron g miller, level, aaron ">
        <title>Aaron G. Miller | Choreographer</title>
        <link rel="stylesheet" href="style.css" />
        <?php wp_head(); ?>
    </head>
    <body>
    <?php wp_body_open(); ?>
    <?php get_header(); ?>

        <main>
        <?php if (is_front_page()) { ?>
            <section id="workshops">
                <div class="workshopsTextContainer">
                <?php
                    $workshop_headline_query = new WP_Query( array( 'p' => 41 ));
                    if( $workshop_headline_query->have_posts() ) {
                        while( $workshop_headline_query->have_posts() ) {
                            $workshop_headline_query->the_post(); // iterate the post here
                ?>
                <p class="super-headline"><?= get_post_custom_values( 'super-headline' )[0]; ?></p>
                <h2><?php the_title(); ?></h2>
                <?php
                    }
                }
                ?>
                </div>

                <div class="levelContainer">
                    <?php
                        $workshops_query = new WP_Query( array( 'category_name' => 'level', 'order' => 'ASC' ));
                        if( $workshops_query->have_posts() ) {
                            while( $workshops_query->have_posts() ) {
                                $workshops_query->the_post(); // iterate the post here
                    ?>
                    <div id="level<?= get_post_custom_values( 'level' )[0]; ?>" class="level">
                        <div class="numberContainer">
                            <p>
                            <?= get_post_custom_values( 'level' )[0]; ?>
                            </p>
                        </div>
                        <div class="imageContainer">
                            <div class="imgCircle">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } ?>
                            </div>
                        </div>
                        <div class="textContainer">
                            <div class="textMain">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?> 
                                <a href=<?= the_permalink(); ?> class="button">Book Workshop</a>
                            </div>
                        </div>
                        <div class="quoteContainer">
                            <img src="<?php print(get_template_directory_uri()); ?>/images/quote.svg" alt="quote sign" />
                            <blockquote><?= get_post_custom_values( 'slogan' )[0]; ?></blockquote>
                        </div>
                    </div>
                    <div id="registerContainer<?= get_post_custom_values( 'level' )[0]; ?>" class="applyContainer">
                        <p><?= get_post_custom_values( 'apply' )[0]; ?></p>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </section>
            <section id="about">  
                <?php
                    $aboutme_query = new WP_Query( array( 'p' => 6 ));
                    if( $aboutme_query->have_posts() ) {

                        while( $aboutme_query->have_posts() ) {
                            $aboutme_query->the_post(); 
                ?>             
                <img
                    src="<?php print(get_template_directory_uri()); ?>/images/portrait_1280px.jpg"
                    alt="Portrait of Aaron"
                />
                <div class="aboutTextContainer">
                    <div>
                        <p class="super-headline">
                            <?= get_post_custom_values( 'super-headline' )[0]; ?>
                        </p>
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                    <a href="#" class="button">Learn more</a>
                </div>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </section>
            <section id="news">
                <?php
                    $news_headline_query = new WP_Query( array( 'p' => 39 ));
                    if( $news_headline_query->have_posts() ) {
                        while( $news_headline_query->have_posts() ) {
                            $news_headline_query->the_post(); // iterate the post here
                ?>
                <p class="super-headline"><?= get_post_custom_values( 'super-headline' )[0]; ?></p>
                <h2><?php the_title(); ?></h2>
                <?php
                    }
                }
                ?>
                <div class="articleContainer">
                    <?php
                        $news_query = new WP_Query(array('category_name' => 'news', 'posts_per_page' => '3' ));
                        if( $news_query->have_posts() ) {
                            while( $news_query->have_posts() ) {
                                $news_query->the_post(); // iterate the post here
                    ?>
                    <article>
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail(); ?>
                        <div class="arcticleTextContainer">
                            <?php the_content(); ?>
                            <a href=<?php the_permalink(); ?> class="button">Read more</a>                   
                        </div>
                    </article>
                    <?php
                            }
                        }
                        ?>
                </div>
            </section>
            <?php } else {  ?>
                <?php if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        the_title();
                        the_content();
                    }
                } ?>
                <?php } ?>
        </main>

        <script src='<?php echo get_template_directory_uri() ?>/main.js' type="module"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                MainNav.init();
            });
        </script>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
    </body>
</html>
