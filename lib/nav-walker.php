<?php
/** Custom nav walker to remove horrible list elements around links */

class Bear_Nav_Walker extends Walker_Nav_Menu {

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf( "\n<a href='%s'>%s</a>\n",
               $item->url,
               $item->title
    );
  }

}
