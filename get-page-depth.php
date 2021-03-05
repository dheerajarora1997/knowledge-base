<?php
    // gets the depth of the current page
    global $wp_query;
    $object = $wp_query->get_queried_object();
    $parent_id  = $object->post_parent;
    $depth = 1;
    while ($parent_id > 0) {
        $page = get_page($parent_id);
        $parent_id = $page->post_parent;
        $depth++;
    }
    echo $depth;
?>
