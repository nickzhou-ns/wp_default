<?php get_header(); ?>
<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/bg/header-bg1.png);">
    <img src="<?= get_template_directory_uri() ?>/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-main-content heading1">
                    <h5><img src="<?= get_template_directory_uri() ?>/assets/img/icons/logo-icons.svg" alt="">Extraordinary SEO & Marketing Agency</h5>
                    <h1 class="text-anime-style-3">Elevate Your Brand With Expert SEO & Digital Marketing</h1>
                    <p data-aos="fade-left" data-aos-duration="1000">Welcome to Nihao Media where we specialize in revolutionizing your online <br class="d-lg-block d-none"> presence through expert SEO and digital marketing solutions. </p>
                    <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                        <a href="javascript:void(0);" class="header-btn1">Start Ranking Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        <a href="javascript:void(0);" class="header-btn2">Contact Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-images-area">
                    <div class="main-images-area">
                        <div class="img1">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/all-images/header-img1.png" alt="" data-aos="zoom-in" data-aos-duration="1000">
                        </div>
                        <div class="img2">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/bg/header-imgbg.png" alt="">
                        </div>
                        <div class="icons-area">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icons/sound-icons1.svg" alt="" class="sound-icons1 aniamtion-key-1">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icons/lite-icons1.svg" alt="" class="lite-icons1 aniamtion-key-1">
                        </div>
                        <div class="auhtor-icons">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/elements/elements2.png" alt="" class="elements2">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/elements/elements3.png" alt="" class="elements3">
                        </div>
                        <div class="auhtor-images">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/all-images/header-author-img1.png" alt="" class="header-author-img1 aniamtion-key-2">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/all-images/header-author-img2.png" alt="" class="header-author-img2 aniamtion-key-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->
<?php get_template_part('partials/index_blog'); ?>
<?php get_footer(); ?>