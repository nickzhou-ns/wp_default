<!--===== BLOG AREA STARTS =======-->
<div class="blog1-scetion-area" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="blog-hedaer-area heading2 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/elements/star2.png" alt="" class="star2 keyframe5">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/elements/star2.png" alt="" class="star3 keyframe5">
                    <h2 class="text-anime-style-3">Insights & Innovations: <br class="d-md-block d-none"> Our Latest Blog Posts</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">Explore our blog to discover actionable insights, success stories, and <br class="d-md-block d-none"> expert advice that can help drive growth for your business.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // 查询最新的 3 篇文章
            $args = array(
                'post_type'      => 'post',   // 文章类型
                'posts_per_page' => 3,        // 限制最新 3 篇
                'orderby'        => 'date',   // 按日期排序
                'order'          => 'DESC'    // 从最新到最旧
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-author-boxarea" _data-aos="fade-up" data-aos-duration="1000">
                            <div class="img1">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                        </a>
                                    <?php else : ?>
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/all-images/default-blog.png" alt="Default Image">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="content-area">
                                <div class="tags-area">
                                    <ul>
                                        <li>
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/contact1.svg" alt="">
                                                <?php the_author(); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/calender1.svg" alt="">
                                                <?php echo get_the_date('F j, Y'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="space30 d-lg-none d-block"></div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">No blog posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->