<header id="" class="pl-header">

    <div class="row wrapper d-flex align-items-center">
        <div class="hamburger-menu mr-auto position-relative">
            <div id="hamburger-menu" class="bars"></div>

            <div class="links position-absolute align-items-center justify-content-center">
                <ul class="mx-0 my-0 px-0 py-0 list text-center">
                    <li class="list-inline-item mx-0"><a href="">ABOUT ME</a></li>
                    <li class="list-inline-item mx-0"><a href="">PORTFOLIO</a></li>
                    <li class="list-inline-item mx-0"><a href="">CONTACT</a></li>
                </ul>
            </div>

        </div>

        <div class="logo">
            <?php the_custom_logo() ?>
        </div>

        <div class="heading">
            <h1><?= strtoupper(getCategoryName()); ?></h1>
        </div>
    </div>
    <div class="row scroll-down">
        <span class="m-auto category-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </span>

        <a href="" class="d-block w-100 text-center arrow">
            <img src="<?= get_template_directory_uri() ?>/assets/images/arrow-down.png" alt="">
        </a>
    </div>

</header><!-- #masthead -->