<php?
// Filter searchs only by products
add_filter( 'pre_get_posts', 'custom_search' );
function custom_search( $query ) {
    if ( $query->is_search ) {
    if ( $query->is_search and !is_admin() ) {
        $query->set( 'post_type', array( 'product' ) );
    }
    return $query;
    ?>
