<div class="blog-sidebar-area">
    
    <div class="search-area">
        <h3>Search</h3>
        <form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
            <input type="search" name="s" placeholder="Search..." value="<?= get_search_query(); ?>">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <div class="space32"></div>
    <div class="categories-area">
        <h3>Categories</h3>
        <ul>
            <?php
            $categories = get_categories(array(
                'orderby'    => 'name', // 按名称排序
                'order'      => 'ASC',  // 升序
                'hide_empty' => true,   // 隐藏没有文章的分类
            ));

            foreach ($categories as $category) : ?>
                <li>
                    <a href="<?= esc_url(get_category_link($category->term_id)); ?>">
                        <?= esc_html($category->name); ?> (<?= $category->count; ?>)
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="space32"></div>
    <div class="posts-area">
        <h3>Recent Posts</h3>

        <?php
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3, // 获取最新 3 篇文章
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>
                <div class="post-auhtor-area">
                    <div class="img1">
                        <a href="<?= esc_url(get_permalink()); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                            <?php else : ?>
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/all-images/default-post.png" alt="Default Image">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="content">
                        <a href="<?= esc_url(get_permalink()); ?>" class="date">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/calender1.svg" alt="">
                            <?= get_the_date('d F Y'); ?>
                        </a>
                        <a href="<?= esc_url(get_permalink()); ?>" class="head">
                            <?= esc_html(get_the_title()); ?>
                        </a>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No recent posts available.</p>';
        endif;
        ?>
    </div>

    <div class="space32"></div>
    <div class="tags-area">
        <h3>Popular Tags</h3>
        <ul>
            <?php
            $tags = get_tags(array(
                'orderby'    => 'count', // 按文章数量排序
                'order'      => 'DESC',  // 由多到少排列
                'number'     => 10,      // 限制显示 10 个标签
            ));

            if ($tags) :
                foreach ($tags as $tag) :
            ?>
                    <li><a href="<?= esc_url(get_tag_link($tag->term_id)); ?>"><?= esc_html($tag->name); ?></a></li>
            <?php
                endforeach;
            else :
                echo '<p>No tags found.</p>';
            endif;
            ?>
        </ul>
    </div>

    <div class="space32"></div>
    <div class="others-area">
        <h3>If You Need Any Help Contact With Us</h3>
        <div class="space16"></div>
        <div class="btn-area">
            <a href="tel:<?= get_option('nihao_phone') ?>" class="header-btn1"><?= get_option('nihao_phone') ?><span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>