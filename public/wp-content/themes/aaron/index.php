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
        <title>Aaron G. Miller | Choreographer</title>
        <link rel="stylesheet" href="style.css" />
        <?php wp_head(); ?>
    </head>
    <body>
    <?php wp_body_open(); ?>
    <?php get_header(); ?>

        <main>
            <section id="workshops">
                <div class="workshopsTextContainer">
                    <p class="super-headline">
                        Find your entrance level & book a workshop with Aaron
                    </p>
                    <h2>If you never start, you will never know.</h2>
                </div>

                <div class="levelContainer">
                    <div id="level3" class="level">
                        <div class="numberContainer"><p>3</p></div>
                        <div class="imageContainer">
                            <div class="imgCircle">
                                <img 
                                    src="<?php print(get_template_directory_uri()); ?>/images/level-3.svg"
                                    alt="Icon showing dance stretching her leg up to her nose."
                                />
                            </div>
                        </div>

                        <div class="textContainer">
                            <div class="textMain">
                                <h3>As pro as you can get</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua.
                                </p>
                                <a href="#" class="button">Book Workshop</a>
                            </div>
                        </div>
                        <div class="quoteContainer">
                            <img src="<?php print(get_template_directory_uri()); ?>/images/quote.svg" alt="quote sign" />
                            <blockquote>Respect your talent!</blockquote>
                        </div>
                    </div>
                    <div id="applyWorkshop" class="applyContainer">
                        <p>Apply for an audition now!</p>
                    </div>
                    <div id="level2" class="level">
                        <div class="numberContainer"><p>2</p></div>
                        <div class="imageContainer">
                            <div class="imgCircle">
                                <img
                                    src="<?php print(get_template_directory_uri()); ?>/images/level-2.svg"
                                    alt="Icon showing dancer
                    stretching her leg up to her nose."
                                />
                            </div>
                        </div>
                        <div class="textContainer">
                            <div class="textMain">
                                <h3>As pro as you can get</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua.
                                </p>
                                <a href="#" class="button">Book Workshop</a>
                            </div>
                        </div>
                        <div class="quoteContainer">
                            <img src="<?php print(get_template_directory_uri()); ?>/images/quote.svg" alt="quote sign" />
                            <blockquote>
                                Thank yourself for leveling up now!
                            </blockquote>
                        </div>
                    </div>
                    <div id="registerContainer2" class="applyContainer">
                        <p>Registration now open for everybody!</p>
                    </div>
                    <div id="level1" class="level">
                        <div class="numberContainer"><p>1</p></div>
                        <div class="imageContainer">
                            <div class="imgCircle">
                                <img
                                    src="<?php print(get_template_directory_uri()); ?>/images/level-1.svg"
                                    alt="Icon showing dancer
                    stretching her leg up to her nose."
                                />
                            </div>
                        </div>
                        <div class="textContainer">
                            <div class="textMain">
                                <h3>As pro as you can get</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua.
                                </p>
                                <a href="#" class="button">Book Workshop</a>
                            </div>
                        </div>
                        <div class="quoteContainer">
                            <img src="<?php print(get_template_directory_uri()); ?>/images/quote.svg" alt="quote sign" />
                            <blockquote>Fall in love with dancing!</blockquote>
                        </div>
                    </div>
                    <div id="registerContainer1" class="applyContainer">
                        <p>Registration now open for everybody!</p>
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="imgContainer">
                    <img
                        src="<?php print(get_template_directory_uri()); ?>/images/portrait_1280px.jpg"
                        alt="Portrait of Aaron"
                    />
                </div>

                <div class="aboutTextContainer">
                    <div>
                        <p class="super-headline">Why I teach</p>
                        <h2>Hi, I'm Aaron!</h2>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Placeat itaque incidunt, nihil, recusandae autem aut
                        perferendis reiciendis a neque veniam quibusdam animi ex
                        tempora reprehenderit, aspernatur asperiores consequatur
                        consectetur ipsum!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Placeat itaque incidunt, nihil, recusandae autem aut
                        perferendis reiciendis a neque veniam quibusdam animi ex
                        tempora reprehenderit, aspernatur asperiores consequatur
                        consectetur ipsum! Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Placeat itaque incidunt,
                        nihil, recusandae autem aut perferendis reiciendis a
                        neque veniam quibusdam animi ex tempora reprehenderit,
                        aspernatur asperiores consequatur consectetur ipsum!
                    </p>

                    <a href="#" class="button">Learn more</a>
                </div>
            </section>
            <section id="news">
                <p class="super-headline">Making waves since 2004</p>
                <h2>In the News</h2>

                <div class="articleContainer">
                    <article>
                        <h3>Sydney Dance Festival 2022</h3>
                        <img
                            src="<?php print(get_template_directory_uri()); ?>/images/dance1_640px.jpg"
                            alt="Aaron performing at the Sydney dance festival 2022"
                        />
                        <div class="arcticleTextContainer">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam
                                et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren, no sea takimata sanctus est
                                Lorem ipsum dolor sit amet.
                            </p>
                            <a href="#" class="button">Read more</a>
                        </div>
                    </article>
                    <article>
                        <h3>"Dance Pool" 2023 sold out!</h3>
                        <img
                            src="<?php print(get_template_directory_uri()); ?>/images/group_640px.jpg"
                            alt="Group picture of 'Dance Pool'"
                        />
                        <div class="arcticleTextContainer">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam
                                et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren, no sea takimata sanctus est
                                Lorem ipsum dolor sit amet.
                            </p>
                            <a href="#" class="button">Read more</a>
                        </div>
                    </article>
                    <article>
                        <h3>New London Workshop Oct. 2025</h3>
                        <img
                            src="<?php print(get_template_directory_uri()); ?>/images/dance2_640px.jpg"
                            alt="Aaron at a workshop"
                        />
                        <div class="arcticleTextContainer">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam
                                et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren, no sea takimata sanctus est
                                Lorem ipsum dolor sit amet.
                            </p>
                            <a href="#" class="button">Read more</a>
                        </div>
                    </article>
                </div>
            </section>
        </main>

         <script src="main.js"></script> 
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                MainNav.init();
            });
        </script>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
    </body>
</html>
