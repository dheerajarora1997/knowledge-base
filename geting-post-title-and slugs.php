//Create a Function in php file

function the_slug($id = null)
{
    echo apply_filters('the_slug', get_the_slug($id));
}

function get_the_slug($id = null)
{
    if (empty($id)) {
        global $post;
        if (empty($post)) {
            return '';
        }

        $id = $post->ID;
    }
    $slug = basename(get_permalink($id));
    return $slug;
}

// code in file ie. breadcrumb

<div class="container">
            <?php
				$current = $post->ID;
				$parent = $post->post_parent;
				$grandparent_get = get_post($parent);
				$grandparent = $grandparent_get->post_parent;
			?>
            <div class="alert alert-danger mb-4">
                <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
                >>
                <?php if ($root_parent = get_the_title($parent) !== $root_parent = get_the_title($current)) {echo get_the_title($parent); }else {echo get_the_title($current); }?>
                >>
                <?php if ($root_parent = get_the_title($current) !== $root_parent = get_the_title($current)) {echo get_the_title($current); }else {echo get_the_title($current); }?>
            </div>
            <div class="alert alert-success mb-4">
                <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current) ) {echo get_the_slug($grandparent); }else {echo get_the_slug($parent); }?>
                >>
                <?php if ($root_parent = get_the_title($parent) !== $root_parent = get_the_title($current)) {echo get_the_slug($parent); }else {echo get_the_slug($current); }?>
                >>
                <?php if ($root_parent = get_the_title($current) !== $root_parent = get_the_title($current)) {echo get_the_slug($current); }else {echo get_the_slug($current); }?>
            </div>
        </div>
