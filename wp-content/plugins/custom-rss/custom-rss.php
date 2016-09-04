<?php
/**
 * Plugin Name: Custom RSS
 * Description: muestra grande el Rss link
 * Version: 0.1
 * Author: maxifalcone
 * Author URI: http://maxifalcone.org
 */


class custom_rss extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function custom_rss() {
        parent::WP_Widget(false, $name = 'Custom Rss');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        ?>
              
              <img src="<?php echo plugins_url( 'img/rss-link.jpg' , __FILE__ ); ?>" />

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
          custom-rss
        </p>
        <?php 
    }
 
 
} // end class custom_rss
add_action('widgets_init', create_function('', 'return register_widget("custom_rss");'));
?>