<?php
get_header();
?>
<!--===== BLOG AREA STARTS =======-->
<div class="blog-auhtor-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php get_template_part('partials/blog_sidebar'); ?>
            </div>
            <div class="col-lg-8">
                <?php get_template_part('partials/blog_article'); ?>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->
<?php
get_footer();
?>