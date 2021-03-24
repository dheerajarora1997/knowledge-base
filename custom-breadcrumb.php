<?php
    $current = $post->ID;
    $parent = $post->post_parent;
    $grandparent_get = get_post($parent);
    $grandparent = $grandparent_get->post_parent;
?>
<?php

    function clean($string) {
        // $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[-]/', ' ', $string); // Removes special chars.
    }

?>
<div class="npf-breadcrumb">
    <?php
    $url = home_url();
    $grandparenturl = get_the_slug($grandparent);
    $parenturl = get_the_slug($parent);
    if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($child)){
        echo "
            <ol itemscope itemtype='https://schema.org/BreadcrumbList'>
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a itemprop='item' href='".$url."'>
                        <span itemprop='name'><i class='fa fa-home'></i><i class='sr-only'>Home</i></span>
                    </a>
                    <meta itemprop='position' content='1' />
                </li>&nbsp;»&nbsp;
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a  itemprop='item' href='".$url."/".$grandparenturl."'>
                        <span itemprop='name'>". clean($grandparenturl) ."</span>
                    </a>
                    <meta itemprop='position' content='2' />
                </li>&nbsp;»&nbsp;
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a itemprop='item' href='".$url."/".$grandparenturl."/".$parenturl."'>
                        <span itemprop='name'>". clean($parenturl) ."</span>
                    </a>
                    <meta itemprop='position' content='3' />
                </li>&nbsp;»&nbsp;
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <span itemprop='name'>". clean(get_the_slug($current)) ."</span>
                    <meta itemprop='position' content='4' />
                </li>
            </ol>"
        ;}
    else if($root_parent = get_the_title($parent) !== $root_parent = get_the_title($current)) {
        echo "
            <ol itemscope itemtype='https://schema.org/BreadcrumbList'>
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a itemprop='item' href='".$url."'>
                        <span itemprop='name'><i class='fa fa-home'></i><i class='sr-only'>Home</i></span>
                        <meta itemprop='position' content='1' />
                    </a>
                </li>&nbsp;»&nbsp;
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a  itemprop='item'
                        href='".$url."/".$parenturl."'>
                        <span itemprop='name'>". clean($parenturl) ."</span>
                    </a>
                    <meta itemprop='position' content='2' />
                </li>&nbsp;»&nbsp;
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <span itemprop='name'>". clean(get_the_slug($current)) ."</span>
                    <meta itemprop='position' content='3' />
                </li>
            </ol>"
        ;}
    else if($root_parent = get_the_title($current) == $root_parent = get_the_title($child)) {
        echo "
            <ol itemscope itemtype='https://schema.org/BreadcrumbList'>
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a itemprop='item' href='".$url."'>
                        <span itemprop='name'><i class='fa fa-home'></i><i class='sr-only'>Home</i></span>
                    </a>
                    <meta itemprop='position' content='1' />
                </li>&nbsp;»&nbsp;
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <span itemprop='name'>". clean(get_the_slug($current)) ."</span>
                    <meta itemprop='position' content='2' />
                </li>
            </ol>"
    ;}
    else {
        echo get_the_slug($child);
    }
    ?>
</div>
