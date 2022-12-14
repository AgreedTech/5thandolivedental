<?php defined('ABSPATH') || die; ?>

<div class="wrap">
    <h1 class="wp-heading-inline">
        <?= esc_html(get_admin_page_title()); ?>
        <a href="<?= admin_url('index.php?page='.glsr()->id.'-welcome'); ?>" class="page-title-action"><?= _x('About', 'admin-text', 'site-reviews'); ?></a>
    </h1>
    <?= $notices; ?>
    <div class="notice notice-success">
        <p>If you love Site Reviews and would like to support my work, please consider purchasing some add-ons. ❤️</p>
    </div>
    <div class="glsr-addons">
    <?php
        $template->render('partials/addons/addon', [
            'context' => [
                'description' => _x('The Premium license gives you access to all of the add-ons, including all future add-ons as they become available!', 'admin-text', 'site-reviews').' 👀',
                'link' => 'https://niftyplugins.com/plugins/site-reviews-premium/',
                'link_text' => _x('Discover Premium', 'admin-text', 'site-reviews'),
                'slug' => 'premium',
                'title' => 'Site Reviews Premium',
            ],
            'plugin' => '',
        ]);
        $template->render('partials/addons/addon', [
            'context' => [
                'description' => _x('Allow your website visitors to sort, filter by rating, and search reviews.', 'admin-text', 'site-reviews'),
                'link' => 'https://niftyplugins.com/plugins/site-reviews-filters/',
                'link_text' => _x('View Add-on', 'admin-text', 'site-reviews'),
                'slug' => 'filters',
                'title' => 'Review Filters',
            ],
            'plugin' => 'site-reviews-filters/site-reviews-filters.php',
        ]);
        $template->render('partials/addons/addon', [
            'context' => [
                'description' => _x('Form builder with 22 different field types, each form has its own Review Template which can be customised as needed.', 'admin-text', 'site-reviews'),
                'link' => 'https://niftyplugins.com/plugins/site-reviews-forms/',
                'link_text' => _x('View Add-on', 'admin-text', 'site-reviews'),
                'slug' => 'forms',
                'title' => 'Review Forms',
            ],
            'plugin' => 'site-reviews-forms/site-reviews-forms.php',
        ]);
        $template->render('partials/addons/addon', [
            'context' => [
                'description' => _x('Allow your website visitors to submit images (and optional captions) with their reviews.', 'admin-text', 'site-reviews'),
                'link' => 'https://niftyplugins.com/plugins/site-reviews-images/',
                'link_text' => _x('View Add-on', 'admin-text', 'site-reviews'),
                'slug' => 'images',
                'title' => 'Review Images',
            ],
            'plugin' => 'site-reviews-images/site-reviews-images.php',
        ]);
        $template->render('partials/addons/addon', [
            'context' => [
                'description' => _x('Design reviews with a drag-and-drop builder, display reviews in a grid or carousel, choose custom rating images, and more!', 'admin-text', 'site-reviews'),
                'link' => 'https://niftyplugins.com/account/downloads/',
                'link_text' => _x('Premium members only', 'admin-text', 'site-reviews'),
                'slug' => 'themes',
                'title' => 'Review Themes (beta)',
            ],
            'plugin' => 'site-reviews-themes/site-reviews-themes.php',
        ]);
        $template->render('partials/addons/addon', [
            'context' => [
                'description' => _x('Integrate Site Reviews with your Woocommerce products.', 'admin-text', 'site-reviews'),
                'link' => 'https://niftyplugins.com/plugins/woocommerce-reviews/',
                'link_text' => _x('View Add-on', 'admin-text', 'site-reviews'),
                'slug' => 'woocommerce',
                'title' => 'Woocommerce Reviews',
            ],
            'plugin' => 'site-reviews-woocommerce/site-reviews-woocommerce.php',
        ]);
    ?>
    </div>
</div>
