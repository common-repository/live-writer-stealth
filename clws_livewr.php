<?php
/**
 * @package Live Writer Stealth
 * @version 1.0.0
 */
/*
Plugin Name: Live Writer Stealth
Plugin URI: http://www.codelizard.com/Software/Wordpress/live-writer-stealth.html
Description: Keep windows live writer auto-posts hidden
Version: 1.0
Author: Code Lizard
Author URI: http://www.codelizard.com

*/

function clws_lw_posts_where($where)
{
   if(!is_admin() && strpos($_SERVER['HTTP_USER_AGENT'], 'Windows Live Writer') === false)
   {
      if ($where != '') {
         $where .= ' AND ';
      }

      $where .= "post_title NOT LIKE 'Temporary Post Used For % Detection (%)'";
   }
   return $where;
}

add_filter('posts_where', 'clws_lw_posts_where');

?>