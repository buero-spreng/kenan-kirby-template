<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Kirby Preset</title>
    <!-- load local copy of jquery -->
    <?= js('node_modules/jquery/dist/jquery.min.js') ?>
    
    <?= css('assets/css/style.css') ?>
    <?= css('@auto') ?>

    <?php if ($head = $slots->head()) : ?>
        <?= $head ?>
    <?php endif ?>

</head>

<body>

    <header>
        <?= snippet('header') ?>

        <?php if ($header = $slots->header()) : ?>
            <?= $header ?>
        <?php endif ?>
    </header>

    <main>
    <h1><?= $page->title() ?></h1>
        <?php if ($main = $slots->default()) : ?>
            <?= $main ?>
        <?php endif ?>
    </main>

    <footer>
        <?= snippet('footer') ?>
        <?php if ($footer = $slots->footer()) : ?>
            <?= $footer ?>
        <?php endif ?>
    </footer>

    <?= js('assets/js/main.js') ?>
    <?= js('@auto') ?>
    <?php if ($foot = $slots->foot()) : ?>
            <?= $foot ?>
    <?php endif ?>
</body>

</html>