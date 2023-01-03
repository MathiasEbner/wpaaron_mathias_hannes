<header>
    <div class="topNavContainer">
        <a href="/"
            ><h1>
                Aaron G. Miller |
                <span id="h1Small">Choreographer</span>
            </h1></a
        >
        <nav id="mainnav">
            <button id="hamburger" class="closed">
                <span class="line-1"></span>
                <span class="line-2"></span>
            </button>
            <ul>
                <li><a href="#workshops">Workshops</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#news">News</a></li>
            </ul>
        </nav>
    </div>
    <div class="headerMainContainer">
        <div class="headerText">
            <?php
                $header_headline_query = new WP_Query( array( 'p' => 49 ));
                if( $header_headline_query->have_posts() ) {
                    while( $header_headline_query->have_posts() ) {
                        $header_headline_query->the_post(); // iterate the post here
            ?>
                <h2><?php the_title(); ?></h2>
            <?php
                }
            }
            ?>
            <a href="#" class="button" id="headerButton"
                >Book Workshop</a
            >
        </div>
    </div>
</header>