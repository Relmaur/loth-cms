<?php
include "blog-post.php";
?>

<?php

/* We can use $connection here since in index.php is being included. (And this php is also being used in there) */
$query = "SELECT * FROM posts";
$query_db = mysqli_query($connection, $query); 

/* mysqli_fetch_all($query, MYSQLI_ASSOC) fetches all the entries of the queried table, in the format: Array(0 => Array(row_1), 1 => Array(row_2), 2 => Array(row_3),... n => Array(row_n)). MYSQLI_ASSOC gives the array a more clean and accessible format. */
$posts_array = mysqli_fetch_all($query_db, MYSQLI_ASSOC);

?>

<?php

/*========== Render ==========*/
function get_blog_entries()
{
    /* We grab the searched value because we want to output what the user typed in in a 'not found' message, this variable comes from ./sidebar.php */
    global $userSearch;

    /* We then grab the below variable, which holds all the existing posts on the database (this variable is defined above) */
    global $posts_array;

    /* Again, this one comes from ./sidebar.php, and stores a nicely formatted array of posts given the user input */
    global $search_posts_array;

    /* This is for checking whether the user hit submit or not */
    global $isSubmitted;

    /* Number of ALL the existing posts */
    $posts_array_number = count($posts_array);

    /* Number of ALL the posts which match the user's input */
    $search_posts_array_number = count($search_posts_array);

?>

    <div class="blogposts w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 mb-4">

        <?php

        $post_display_limit = 3;


        /* The below code loops through the whole posts array and the searched posts array, while setting a limit of 3 posts per page. */

        /* This if evaluates whether there was a search or not */
        if ($search_posts_array or $isSubmitted) {

            if ($search_posts_array_number == 0) {
                echo "<h1>No results found for <span class='text-secondary'>{$userSearch}</span></h1>";
            } else {
                if ($search_posts_array_number < 3) {
                    $post_display_limit = $search_posts_array_number;
                }

                for ($postNumber = 0; $postNumber < $post_display_limit; $postNumber++) {

                    /*========== Blogpost render ==========*/
                    get_blog_post($search_posts_array, $postNumber);
                    /*========== ...Blogpost render ==========*/
                }
            }
        } else {

            /* If no posts were found, then display 9 posts */
            if ($posts_array_number < 10) {
                $post_display_limit = $posts_array_number;
            }

            for ($postNumber = 0; $postNumber < $post_display_limit; $postNumber++) {

                /*========== Blogpost render ==========*/
                get_blog_post($posts_array, $postNumber);
                /*========== ...Blogpost render ==========*/
            }
        }
        ?>

    </div>

    <div class="navigation-buttons float-right text-2xl">
        <a href=""><i class="bi bi-arrow-left-short px-1 border border-black rounded-md hover:bg-orange hover:text-white hover:border-none transition"></i></a>
        <a href=""><i class="bi bi-arrow-right-short px-1 border border-black rounded-md hover:bg-orange hover:text-white hover:border-none transition"></i></a>
    </div>

<?php } 
/*========== ...Render ==========*/

?>

