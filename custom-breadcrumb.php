//Code for function.php 

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

//page code


<?php
  $current = $post->ID;
  $parent = $post->post_parent;
  $grandparent_get = get_post($parent);
  $grandparent = $grandparent_get->post_parent;
?>

<div class="npf-breadcrumb">
    <?php
        $url = home_url();
        $grandparenturl = get_the_slug($grandparent);
        $parenturl = get_the_slug($parent);
        if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($child)){
            echo "<a href='".$url."'><i class='fa fa-home'></i></a>&nbsp;»&nbsp;
            <a href='".$url."/".$grandparenturl."'>". $grandparenturl ."</a>&nbsp;»&nbsp;
            <a href='".$url."/".$grandparenturl."/".$parenturl."'>". $parenturl ."</a>&nbsp;»&nbsp;"
            .get_the_slug($current);
        }
        else if($root_parent = get_the_title($parent) !== $root_parent = get_the_title($current)) {
            echo "<a href='".$url."'><i class='fa fa-home'></i></a>&nbsp;»&nbsp;
            <a href='".$url."/".$grandparenturl."/".$parenturl."'>". $parenturl ."</a>&nbsp;»&nbsp;"
            .get_the_slug($current);
        }
        else if($root_parent = get_the_title($child) == $root_parent = get_the_title($child)) {
            echo "<a href='".$url."'><i class='fa fa-home'></i></a>&nbsp;»&nbsp;"
            .get_the_slug($current);;
        }
        else {
            echo get_the_slug($child);
        }
    ?>
</div>
