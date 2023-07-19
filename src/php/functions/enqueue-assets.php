<?php

namespace <%= slug %>;

function enqueue_assets() {
  $css = get_theme_file_uri('css/main.css') . '?<%= timestamp %>';
  wp_enqueue_style(__NAMESPACE__, $css, array(), null);
  
  $js = get_theme_file_uri('js/main.js');
  wp_enqueue_script(__NAMESPACE__, $js, null, '<%= timestamp %>', true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets');

?>
