add_action('acf/init', 'options_page');

function options_page() {
    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('More Settings'),
            'menu_title'    => __('Display Settings'),
            'menu_slug'     => 'more-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}
