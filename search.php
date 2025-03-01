<?php get_header(); ?>

<div class="blog1-scetion-area sp1 bg2">
    <div class="container">
        <div class="row">
            <?php
            // 获取当前分页页码
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $posts_per_page = 9; // 每页文章数量

            // 定义搜索查询参数
            $args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'paged'          => $paged,
                'posts_per_page' => $posts_per_page,
                's'              => get_search_query(), // 获取搜索关键词
            );

            // 创建 WP_Query 查询
            $search_query = new WP_Query($args);

            if ($search_query->have_posts()) :
                while ($search_query->have_posts()) :
                    $search_query->the_post();
                    $categories = get_the_category();
                    $item_category = !empty($categories) ? $categories[0]->name : 'Uncategorized';
                    $item_author = get_the_author();
                    $item_img = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : get_template_directory_uri() . '/assets/images/404.jpg';
                    $item_date = get_the_date('Y-m-d');
                    $item_url = get_permalink();
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-author-boxarea">
                            <div class="img1">
                                <a href="<?= esc_url($item_url); ?>">
                                    <img src="<?= esc_url($item_img); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                                </a>
                            </div>
                            <div class="content-area">
                                <div class="tags-area">
                                    <ul>
                                        <li>
                                            <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/contact1.svg" alt="">
                                                <?= esc_html($item_author); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= esc_url($item_url); ?>">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/calender1.svg" alt="">
                                                <?= esc_html($item_date); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="<?= esc_url($item_url); ?>" title="<?= esc_attr(get_the_title()); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                <a href="<?= esc_url($item_url); ?>" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="space30"></div>
                    </div>
                <?php
                endwhile;
                ?>
        </div>

        <!-- 分页 -->
        <div class="col-lg-12">
            <div class="pagination-area">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php
                        $big = 999999999; // 生成 base 时使用的一个大数，确保替换正确
                        $pages = paginate_links(array(
                            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format'    => '?paged=%#%',
                            'current'   => max(1, get_query_var('paged')),
                            'total'     => $search_query->max_num_pages,
                            'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
                            'next_text' => '<i class="fa-solid fa-angle-right"></i>',
                            'mid_size'  => 2,
                            'type'      => 'array', // 让 paginate_links 以数组返回结果，方便遍历
                        ));

                        if ($pages) {
                            foreach ($pages as $page) {
                                // 处理当前页
                                if (strpos($page, 'current') !== false) {
                                    echo '<li class="page-item active"><a class="page-link">' . strip_tags($page) . '</a></li>';
                                } else {
                                    echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

    <?php
                wp_reset_postdata(); // 重置查询
            else :
                echo '<p class="text-center">没有找到与 "<strong>' . esc_html(get_search_query()) . '</strong>" 相关的内容。</p>';
            endif;
    ?>
    </div>
</div>

<?php get_footer(); ?>