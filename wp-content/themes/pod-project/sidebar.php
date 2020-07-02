<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pod_project
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<!-- <h1>This is sidebar</h1> -->
<div class="col-12 col-lg-4">
          <div class="sidebar-area mt-5">

            
            <?php get_search_form();?>
            <?php if(is_active_sidebar('sidebar-1')){
                  dynamic_sidebar('sidebar-0');
                
              }?>

          </div>
        </div>
















<!-- <aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside>#secondary -->
