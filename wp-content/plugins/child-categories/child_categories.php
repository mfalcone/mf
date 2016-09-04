<?php
/**
 * Plugin Name: Child Categories
 * Description: muestra las categorias hijas
 * Version: 0.1
 * Author: maxifalcone
 * Author URI: http://maxifalcone.org
 */


class child_categories extends WP_Widget {
  
 
    /** constructor -- name this the same as the class above */
    function child_categories() {
        parent::WP_Widget(false, $name = 'Child Categories');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        ?>
        <nav class="child-categories">
             <ul>
                <?php
                //$wp_reset_query(); // just in case the original query_string got disturbed
                $this_cat = get_query_var('cat'); // get the category of this category archive page
                wp_list_categories('child_of=' . $this_cat . '&title_li='); // list child categories
                ?>
            </ul>
        </nav>

        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['message'] = strip_tags($new_instance['message']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
        ?>
         <p>
          child categories
        </p>
        <?php 
    }
 
 
} // end class child_categories
add_action('widgets_init', create_function('', 'return register_widget("child_categories");'));
?>