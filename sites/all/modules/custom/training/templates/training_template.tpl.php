<?php

/**
 * @file
 * Displays a page element (list)
 * Called from function training_theme()
 *
 * Available variables (created in function training_theme_page):
 * - $title: List title
 * - $links array: Links
 * - $items array: Names of link
 */
?>

<ul><strong><?php echo $title ?></strong>

<?php
  $list = '';
  foreach ($links as $name=>$link){
    $list .= '<li><a href="' . $link . '">' . $name . '</a></li>';
  }
  $list .= '</ul>';
  echo $list;
