<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <style>
        body {
            background: #F8FAF9;
        }

        .active {
            background: #8338EB !important;
            color: white !important;
        }
    </style>
</head>

<body>
    <?php include './header.php' ?>
    <hr class='m-1'>
    <main class="row">
        <section class="col-xl-2 col-lg-3">
            <?php include './admin-sidebar.php' ?>
        </section>
        <section class="col-xl-8 col-lg-7">
            <?php include './progress.php' ?>
        </section>
        <section class="col-xl-2 col-lg-2"></section>
    </main>
</body>

</html>