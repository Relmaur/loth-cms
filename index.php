<?php
// This include below will go all the way through the includes folder files, so in there all can use the variable $connection (this is because everything there is being pulled here).
include "includes/db/mysql/db-connection.php";
include "includes/head.php";
include "includes/navigation.php";
include "includes/footer.php";
include "includes/sidebar.php";
include "includes/blog-entries.php";
?>

<?php get_head("Loth CMS"); ?>

<body class="px-10">

    <?php get_navigation(); ?>

    <div class="app-body flex justify-end lg:justify-between max-w-7xl mx-auto gap-x-[2%]">

        <!-- /*========== Sidebar ==========*/ -->
        <?php get_sidebar(); ?>
        <!-- /*========== ...Sidebar ==========*/ -->

        <main class="lg:mx-auto flex flex-col items-end lg:items-center lg:w-5/6 w-full">

            <section class="hero bg-gradient-to-r from-[#090979] to-[#00d4ff] w-full px-10 py-12 lg:p-24 text-white rounded-md border border-black">
                <div class="hero-text w-full lg:w-4/6">
                    <h1 class="text-4xl font-black">Lorem, ipsum dolor.</h1>
                    <h2 class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, sequi.</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla debitis voluptatem nostrum voluptatibus deleniti maiores blanditiis similique quos, aspernatur eligendi?</p>
                </div>
            </section>

            <!-- <section class="section-2 flex justify-between items-center flex-wrap pt-16 pb-8">
                <div class="image min-w-1/2">
                    <img src="https://picsum.photos/seed/picsum/500/200" alt="">
                </div>
                <div class="text w-1/2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti fuga quibusdam nostrum sit enim magni quis, eius sunt in officia culpa voluptatum officiis. Maxime libero quaerat laborum non expedita beatae fuga. Nam natus consequatur delectus praesentium tempora exercitationem? Sed esse nisi autem aliquam magni illo quaerat recusandae mollitia! Aliquam, sit?</p>
                </div>
            </section> -->

            <!-- /*========== Blog Entries Section ==========*/ -->
            <section class="pt-8">
                <div class="title mb-6">
                    <h2 class="text-3xl font-serif font-bold after:content-[''] after:block after:bg-darkgray after:h-1 after:w-1/5 flex items-center gap-2 sm:gap-5">Check Out the Blog!</h2>
                </div>
                <?php get_blog_entries(); ?>
            </section>
            <!-- /*========== ...Blog Entries Section ==========*/ -->

        </main>

    </div>

    <?php get_footer(); ?>