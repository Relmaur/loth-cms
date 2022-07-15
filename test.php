<!-- This file is for testing purposes -->

<?php
include "includes/mysql/db-connection.php";
?>

<?php


$query_categories = "SELECT * FROM categories";
$query_posts = "SELECT * FROM posts";

/* ===== Categories arays ===== */

$query_cat = mysqli_query($connection, $query_categories);
print_r($query_cat);
echo "<br />";
// When having 4 entries (rows) in the categories table
// -> mysqli_result Object ([current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 4 [type] => 0)

// myslqi_fetch_assoc($queryresult) fetches the next row of a result set as an associative array
$categories_row = mysqli_fetch_assoc($query_cat);
print_r($categories_row);
echo "<hr />";
// -> Array ([cat_id] => 1 [cat_title] => Bootstrap)

/* ===== Results arays ===== */

$query_p = mysqli_query($connection, $query_posts);
print_r($query_p);
echo "<br />";

$posts_row = mysqli_fetch_all($query_p, MYSQLI_ASSOC);
print_r($posts_row);
echo "The number of entries in this array is: " . count($posts_row);
echo "<br />";
$num_posts = $query_p->num_rows;
echo "This is the number of entries (posts): {$num_posts}";
echo "<hr />";


// // Display the date
// $date = $posts_row['4'];
// $form_date = strtotime($date);
// echo date('F d, Y', $form_date);

$query1 = "SELECT * FROM posts WHERE post_category_id LIKE '%2%'";
$query1_db = mysqli_query($connection, $query1);
$search_posts_array_1 = mysqli_fetch_all($query1_db, MYSQLI_ASSOC);

$search = "marco";
$query2 = "SELECT * FROM posts WHERE (post_category_id LIKE '%$search%') OR (post_title LIKE '%$search%') OR (post_author LIKE '%$search%') OR (post_date LIKE '%$search%') OR (post_content LIKE '%$search%') OR (post_tags LIKE '%$search%')";
$query2_db = mysqli_query($connection, $query2);
$search_posts_array_2 = mysqli_fetch_all($query2_db, MYSQLI_ASSOC);
// $post_title = $search_posts_array_2[0]['post_title'];
// echo $post_title;
$number = count($search_posts_array_2);

/* ========== Put below here the database query arrays so they get printed nicely ========== */
echo "<h1>Displayed below is the data requested -</h1>";
echo "<h4>Of the following query:<br /><code>{$query2}</code></h2>";
echo "<h4>The number of posts in this query is: {$number}</h4>";
print("<pre>" . print_r($search_posts_array_2, true) . "</pre>");
/* ========== ./ Put up here the database query arrays so they get printed nicely ========== */
?>