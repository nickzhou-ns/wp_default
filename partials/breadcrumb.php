<div class="about-header-area"
    style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/elements/star2.png" alt="" class="star2 keyframe5">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <!-- 页面标题（如果是首页，显示站点名称，否则显示当前页面标题） -->
                    <h1>
                        <?php
                        if (is_home()) {
                            echo "Blog"; // 手动设置博客标题
                        } else {
                            the_title();
                        }
                        ?>
                    </h1>


                    <!-- 面包屑导航 -->
                    <a href="<?= esc_url(home_url('/')); ?>">
                        <?= __('Home', 'nihao-theme'); ?>
                        <i class="fa-solid fa-angle-right"></i>
                        <span> <?php
                                if (is_home()) {
                                    echo "Blog"; // 手动设置博客标题
                                } else {
                                    the_title();
                                }
                                ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>