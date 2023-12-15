<?php
$current_lang = pll_current_language('slug');

$show_home_collection_boxes = get_field('show_home_collection_boxes');
$home_collection_page_one = get_field('home_collection_page_one');
$home_collection_page_two = get_field('home_collection_page_two');
$home_collection_page_three = get_field('home_collection_page_three');
$home_collection_page_four = get_field('home_collection_page_four');
$home_collection_page_five = get_field('home_collection_page_five');
?>

<?php if ($show_home_collection_boxes): ?>
    <div class="block-collection-boxes">
        <?php if (
                $home_collection_page_one['collection_page_link'] &&
                $home_collection_page_one['collection_page_title'] &&
                $home_collection_page_one['collection_page_img']
        ): ?>
            <a class="collection-box" href="<?= $home_collection_page_one['collection_page_link'] ?>">
                <img class="collection-box-img" src="<?= $home_collection_page_one['collection_page_img']; ?>" />
                <h2 class="collection-box-title"><?= $home_collection_page_one['collection_page_title'] ?></h2>
            </a>
        <?php endif; ?>
        <?php if (
            $home_collection_page_two['collection_page_link'] &&
            $home_collection_page_two['collection_page_title'] &&
            $home_collection_page_two['collection_page_img']
        ): ?>
            <a class="collection-box"
               href="<?= $home_collection_page_two['collection_page_link'] ?>">
                <img class="collection-box-img" src="<?= $home_collection_page_two['collection_page_img']; ?>" />
                <h2 class="collection-box-title"><?= $home_collection_page_two['collection_page_title'] ?></h2>
            </a>
        <?php endif; ?>
        <?php if (
            $home_collection_page_three['collection_page_link'] &&
            $home_collection_page_three['collection_page_title'] &&
            $home_collection_page_three['collection_page_img']
        ): ?>
            <a class="collection-box"
               href="<?= $home_collection_page_three['collection_page_link'] ?>">
                <img class="collection-box-img" src="<?= $home_collection_page_three['collection_page_img']; ?>" />
                <h2 class="collection-box-title"><?= $home_collection_page_three['collection_page_title'] ?></h2>
            </a>
        <?php endif; ?>
        <?php if (
            $home_collection_page_four['collection_page_link'] &&
            $home_collection_page_four['collection_page_title'] &&
            $home_collection_page_four['collection_page_img']
        ): ?>
            <a class="collection-box"
               href="<?= $home_collection_page_four['collection_page_link'] ?>">
                <img class="collection-box-img" src="<?= $home_collection_page_four['collection_page_img']; ?>" />
                <h2 class="collection-box-title"><?= $home_collection_page_four['collection_page_title'] ?></h2>
            </a>
        <?php endif; ?>
        <?php if (
            $home_collection_page_five['collection_page_link'] &&
            $home_collection_page_five['collection_page_title'] &&
            $home_collection_page_five['collection_page_img']
        ): ?>
            <a class="collection-box"
               href="<?= $home_collection_page_five['collection_page_link'] ?>">
                <img class="collection-box-img" src="<?= $home_collection_page_five['collection_page_img']; ?>" />
                <h2 class="collection-box-title"><?= $home_collection_page_five['collection_page_title'] ?></h2>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>
