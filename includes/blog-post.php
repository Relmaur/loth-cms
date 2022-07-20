<?php

function get_blog_post($postQuery, $postNumber)
{

    $the_title = $postQuery[$postNumber]['post_title'];
    $the_author = $postQuery[$postNumber]['post_author'];
    $the_content = $postQuery[$postNumber]['post_content'];
    $the_excerpt = $postQuery[$postNumber]['post_excerpt'];

    /* This it to put the database image reference on the placeholder as long as it has one. If it doesn't it puts the default image. */
    if ($postQuery[$postNumber]['post_image']) {
        $the_image_url = "static/images/" . $postQuery[$postNumber]['post_image'];
    } else {
        $the_image_url = "https://via.placeholder.com/300";
    }

    /* Format the date value given from the database */
    $date = $postQuery[$postNumber]['post_date'];
    $formattedDate = strtotime($date);
    $the_date = date('F d, Y', $formattedDate);

?>

    <!-- Single Blog Structure -->
    <div class="post border border-black rounded-md sm:max-w-full mx-auto min-w-[180px] hover:cursor-pointer">
        <img src="<?php echo $the_image_url; ?>" alt="" class="post-image mx-auto mb-3 w-full h-[200px] max-h-[250px] object-cover">
        <div class="post-body text-center p-5">
            <h2 class="post-title text-darkblue no-underline text-2xl"><a href="#"><?php echo $the_title; ?></a></h2>
            <div class="post-metadata flex justify-center">
                <p class="author-and-date"><span class="author font-bold"><?php echo $the_author; ?></span> | <span class="date">Posted on <?php echo $the_date; ?></span></p>
            </div>
            <div class="post-text">
                <p class="text"><?php echo $the_excerpt; ?></p>
                <a href="">Read More...</a>
            </div>
        </div>
    </div>

<?php } ?>