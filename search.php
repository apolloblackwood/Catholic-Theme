<?php get_header(); ?>

<main>
    <section class="search-results">
        <header>
            <h1><?php printf( esc_html__( 'Search Results for: %s', 'your-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p><?php esc_html_e( 'No results found.', 'your-theme' ); ?></p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>