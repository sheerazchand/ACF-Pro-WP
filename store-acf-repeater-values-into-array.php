/* Here is how to store values from ACF repeater field to a PHP Array */

if( have_rows('products', 'option') ):
  while ( have_rows('products', 'option') ) : the_row();
      $products_names[] = get_sub_field('product_name');
  endwhile;
endif;
