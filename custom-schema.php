function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

<script type="application/ld+json">
   {"@context":"http://schema.org",
    "@type":"Organization",
    "name":"NoPaperForms",
    "url":"https://www.nopaperforms.com/",
    "logo": "https://www.nopaperforms.com/wp-content/uploads/2020/07/logo.png",
    "sameAs":[
      "https://www.facebook.com/nopaperforms",
      "https://twitter.com/nopaperforms1",
      "https://www.youtube.com/channel/UCcHtB-AXJ0qXMUs9-DyjjcA",
      "https://www.linkedin.com/company/nopaperforms-com/"
    ],
    "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+9173033 93210",
    "contactType": "customer service"
    }]
    }
</script>
<script type="application/ld+json">
   {
       "@context": "http://schema.org",
       "@type": "WebSite",
       "name": "NoPaperForms",
       "url": "https://www.nopaperforms.com/"
   }
</script>
<?php
   if (is_blog()) {
       echo '
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type":"Article",
                "mainEntityOfPage":{
                    "@type":"WebPage",
                    "@id":"'.get_permalink( $post->ID ).'"
                },
                "headline":"'.get_the_title().'",
                "description":"'.get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true).'",
                "image":"'.get_the_post_thumbnail_url().'",
                "datePublished":"'.get_the_date().' '.get_the_time().'",
                "dateModified":"'.get_the_modified_date().' '.get_the_modified_time().'",
                "author":{
                    "@type":"Person","name":"'.get_the_author().'"
                    },
                "publisher":{
                    "@type":"Organization",
                    "name":"'.get_bloginfo().'",
                    "logo":{
                        "@type":"ImageObject",
                        "url":"https://www.nopaperforms.com/wp-content/uploads/2020/07/logo.png"
                    }
                }
            }
            </script>';
        }
   else {
       echo '
       <script type="application/ld+json">
       {
        "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "'.get_the_title().'",
            "description": "'.get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true).'"
        }
        </script>
       ';
    }
   ?>
