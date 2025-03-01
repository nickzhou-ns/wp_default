<div class="blog-auhtor-sidebar-area heading2">
    <?php while (have_posts()) : the_post(); ?>

        <!-- 文章标题 -->
        <h2><?php the_title(); ?></h2>
        <div class="space34"></div>

        <!-- 文章信息 -->
        <div class="tags-area">
            <ul>
                <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/icons/contact1.svg" alt=""><?= get_the_author(); ?></a></li>
                <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/icons/calender1.svg" alt=""><?= get_the_date('d F Y'); ?></a></li>
            </ul>
        </div>

        <div class="space34"></div>

        <!-- 特色图片 -->
        <div class="img1">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
            <?php endif; ?>
        </div>

        <div class="space24"></div>

        <!-- 文章内容 -->
        <div class="post-content">
            <?php the_content(); ?>
        </div>

        <div class="space50"></div>

        <!-- 文章标签 -->
        <div class="social-tags">
            <div class="tags">
                <h4>Tags:</h4>
                <ul>
                    <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                </ul>
            </div>
        </div>

        <div class="space50"></div>


    <?php endwhile; ?>
    <div class="space50"></div>

    <div class="contact-form-area">
        <h4>Leave a Reply</h4>
        <div class="space16"></div>
        <p>Provide clear contact information, including phone number, email, and address.</p>
        <div class="space12"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-area">
                    <input type="text" placeholder="First Name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-area">
                    <input type="text" placeholder="Last Name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-area">
                    <input type="email" placeholder="Email">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-area">
                    <input type="number" placeholder="Phone">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="input-area">
                    <input type="text" placeholder="Subject">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="input-area">
                    <textarea placeholder="Message"></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="space24"></div>
                <div class="input-area">
                    <button type="submit" class="header-btn1">Submit <span><i class="fa-solid fa-arrow-right"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</div>