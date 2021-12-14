<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?= __(config('app')->name) ?></title>
    <link rel="stylesheet" href="<?= __('/assets/css/bootstrap.min.css') ?>" />
</head>

<body>

    <?php require_once view_path() . '/components/navbar.php' ?>