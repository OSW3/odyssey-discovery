<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?= $site_name ?></title>

    <link href="<?= $this->asset('fonts/DeadIsland/stylesheet.css') ?>">
    <?= $this->section('stylesheets') ?>
</head>
<body>
	
    <?= $this->section('main_content') ?>

</body>
</html>