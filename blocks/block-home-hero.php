<?php
    $current_lang = pll_current_language('slug');

    $show_home_hero = get_field('show_home_hero');
    $home_hero_slide_one = get_field('home_hero_slide_one');
    $home_hero_slide_two = get_field('home_hero_slide_two');
    $home_hero_slide_three = get_field('home_hero_slide_three');
    $home_hero_slide_four = get_field('home_hero_slide_four');
    $home_hero_slide_five = get_field('home_hero_slide_five');
?>

<?php if ($show_home_hero): ?>
    <div class="block-hero">
        <?php if ($home_hero_slide_one['home_hero_img'] && $home_hero_slide_one['home_hero_title']):
            $s_img = $home_hero_slide_one['home_hero_img'];
            $s_image_src = wp_get_attachment_image_src($s_img, 'full');
            $s_image_alt = get_post_meta($s_img, '_wp_attachment_image_alt', true);
            $s_title = $home_hero_slide_one['home_hero_title'];
            ?>
            <div class="slide">
                <?php if ($s_img): ?>
                    <div class="slide-img" style="background: url(<?= $s_image_src[0]; ?>) no-repeat center top/cover"></div>
                <?php endif; ?>
                <?php if ($s_title): ?>
                    <h2><?= $s_title ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($home_hero_slide_two['home_hero_img'] && $home_hero_slide_two['home_hero_title']):
            $s_img = $home_hero_slide_two['home_hero_img'];
            $s_image_src = wp_get_attachment_image_src($s_img, 'full');
            $s_image_alt = get_post_meta($s_img, '_wp_attachment_image_alt', true);
            $s_title = $home_hero_slide_two['home_hero_title'];
            ?>
            <div class="slide">
                <?php if ($s_img): ?>
                    <div class="slide-img" style="background: url(<?= $s_image_src[0]; ?>) no-repeat center top/cover"></div>
                <?php endif; ?>
                <?php if ($s_title): ?>
                    <h2><?= $s_title ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($home_hero_slide_three['home_hero_img'] && $home_hero_slide_three['home_hero_title']):
            $s_img = $home_hero_slide_three['home_hero_img'];
            $s_image_src = wp_get_attachment_image_src($s_img, 'full');
            $s_image_alt = get_post_meta($s_img, '_wp_attachment_image_alt', true);
            $s_title = $home_hero_slide_three['home_hero_title'];
            ?>
            <div class="slide">
                <?php if ($s_img): ?>
                    <div class="slide-img" style="background: url(<?= $s_image_src[0]; ?>) no-repeat center top/cover"></div>
                <?php endif; ?>
                <?php if ($s_title): ?>
                    <h2><?= $s_title ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($home_hero_slide_four['home_hero_img'] && $home_hero_slide_four['home_hero_title']):
            $s_img = $home_hero_slide_four['home_hero_img'];
            $s_image_src = wp_get_attachment_image_src($s_img, 'full');
            $s_image_alt = get_post_meta($s_img, '_wp_attachment_image_alt', true);
            $s_title = $home_hero_slide_four['home_hero_title'];
            ?>
            <div class="slide">
                <?php if ($s_img): ?>
                    <div class="slide-img" style="background: url(<?= $s_image_src[0]; ?>) no-repeat center top/cover"></div>
                <?php endif; ?>
                <?php if ($s_title): ?>
                    <h2><?= $s_title ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($home_hero_slide_five['home_hero_img'] && $home_hero_slide_five['home_hero_title']):
            $s_img = $home_hero_slide_five['home_hero_img'];
            $s_image_src = wp_get_attachment_image_src($s_img, 'full');
            $s_image_alt = get_post_meta($s_img, '_wp_attachment_image_alt', true);
            $s_title = $home_hero_slide_five['home_hero_title'];
            ?>
            <div class="slide">
                <?php if ($s_img): ?>
                    <div class="slide-img" style="background: url(<?= $s_image_src[0]; ?>) no-repeat center top/cover"></div>
                <?php endif; ?>
                <?php if ($s_title): ?>
                    <h2><?= $s_title ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
