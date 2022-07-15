<?php

function get_navigation()
{
    global $connection; ?>

    <header class="max-w-7xl mx-auto p-5 border border-black rounded-md my-6 relative">
        <nav class="mx-auto flex justify-between items-center">
            <div class="logo">
                <p class="font-black text-black text-4xl">Lo<span class="text-orange">Go</span></p>
            </div>
            <div class="menu flex justify-between items-center gap-5">
                <ul class="menu-site hidden md:flex justify-center gap-3 mr-16">
                    <?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'>{$cat_title}</a></li>";
                    }
                    ?>
                </ul>
                <div class="user text-2xl h-full px-5 bg-softgray absolute right-0 flex items-center rounded-r-md border-l border-darkgray hover:cursor-pointer">
                    <i class="bi bi-person-circle hover:text-orange transition"></i>
                </div>
            </div>
        </nav>
    </header>

<?php } ?>