<?php

$userSearch = "";
$search_posts_array = array();
$issubmitted = false;

if (isset($_POST['submit'])) {

    $isSubmitted = true;
    /* Here we access the user input */
    $userSearch = $_POST['search'];
    /* We then create the query with the given user search */
    $search_query = "SELECT * FROM posts WHERE (post_title LIKE '%$userSearch%') OR (post_author LIKE '%$userSearch%') OR (post_date LIKE '%$userSearch%') OR (post_content LIKE '%$userSearch%') OR (post_tags LIKE '%$userSearch%')";

    $query_db = mysqli_query($connection, $search_query);
    /* mysqli_fetch_all($query, MYSQLI_ASSOC) fetches all the entries of the queried table, in the format: Array(0 => Array(row_1), 1 => Array(row_2), 2 => Array(row_3),... n => Array(row_n)). MYSQLI_ASSOC gives the array a more clean and accessible format. */
    $search_posts_array = mysqli_fetch_all($query_db, MYSQLI_ASSOC);

    if (!$query_db) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

}

function get_sidebar()
{

?>
    <aside class="sidebar-mobile bg-white border border-black rounded-md px-3 py-2 absolute left-10 lg:hidden hover:cursor-pointer hover:bg-softgray hover:rounded-md shadow-2xl">
        <i class="bi bi-chevron-bar-right"></i>
    </aside>

    <aside class="sidebar min-w-[200px] bg-white hidden lg:flex flex-col w-1/6 absolute lg:static">

        <div class="sidebar-container pt-5 pb-10 px-5 border rounded-md border-black">
            <div class="control-bar">
                <div class="open-icon px-1 float-right hover:cursor-pointer hover:bg-softgray hover:rounded-md">
                    <i class="bi bi-chevron-bar-left"></i>
                </div>
            </div>
            <div class="search-bar w-full text-center flex flex-col gap-2 mb-5">
                <h4 class="font-bold">Blog Search</h4>
                <form action="" method="post">
                    <input name="search" type="text" class="py-2 px-4 bg-softgray text-black w-full mb-2">
                    <button name="submit" class="w-full py-2 px-4 bg-orange text-white hover:bg-[#ff770f] transition ease-in" type="submit">
                        Submit
                    </button>
                </form>
            </div>
            <div class="widget-area-1 w-full">
                <h4 class="text-center mb-3">Blog Categories</h4>
                <div class="flex flex-col items-center gap-y-3">
                    <div class="p-5 bg-softgray border border-darkgray rounded-md">
                        <ul class="">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 bg-softgray border border-darkgray rounded-md">
                        <ul class="">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </aside>


<?php } ?>