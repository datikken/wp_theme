<?php get_header(); ?>

<?php get_template_part('_partials/menu'); ?>
<?php get_template_part('_partials/swiper'); ?>
<?php get_template_part('_partials/banners/banners-mob'); ?>
<?php get_template_part('_partials/sales/sales-mob'); ?>

<!--LAYOUT-->
<div class="columns mobile-layout">
    <div class="main_column">

        <?php get_template_part('_partials/sales/sales'); ?>
        <?php get_template_part('_partials/sales/sales-slider'); ?>
        <?php get_template_part('_partials/sales/sales-best'); ?>

    <div class="left_column">

        <?php get_template_part('_partials/news/news'); ?>
        <?php get_template_part('_partials/sales/sales-eco'); ?>
        <?php get_template_part('_partials/banners/banner'); ?>
        <?php get_template_part('_partials/viewed/viewed'); ?>

    </div>
</div>


<div class="columns desktop-layout">
    <div class="left_column">
        <?php get_template_part('_partials/news/news'); ?>
        <?php get_template_part('_partials/banners/banner'); ?>
        <?php get_template_part('_partials/viewed/viewed'); ?>
    </div>

    <div class="main_column">
        <?php get_template_part('_partials/sales/sales'); ?>
        <?php get_template_part('_partials/sales/sales-slider'); ?>
        <?php get_template_part('_partials/sales/sales-eco'); ?>
        <?php get_template_part('_partials/sales/sales-best'); ?>
    </div>
</div>

<?php get_template_part('_partials/carousel/carousel'); ?>

<?php get_footer(); ?>