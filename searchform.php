<p class="search-box-tittle">I am looking for</p>
<form id="search-wrapper" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
        <input type="search" id="search" class="search-field" placeholder="Search for anything here" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input id="search-button" type="submit" class="search-submit" value="<?php echo esc_attr_x( 'SEARCH', 'submit button' ); ?>" />
</form>
<?php
if( isset( $_SESSION['recent_searches'] ) && !empty( $_SESSION['recent_searches'] ) ) {
    echo '<p class="search-results-title">RECENT SEARCHES</p>';
    echo '<ul class="wrapper search-results">';
    foreach( $_SESSION['recent_searches'] as $search ) {
        echo '<li><a href="' . esc_url( home_url( '/?s=' . urlencode( $search ) ) ) . '">' . esc_html( $search ) . '</a></li>';
    }
    echo '</ul>';
}
?>
