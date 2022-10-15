<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- LOGIN CSS CUSTOM -->
    <link rel="stylesheet" href="/assets/css/auth.css">
</head>

<body>

    <?php $this->renderSection('content'); ?>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>