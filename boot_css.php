<link rel="shortcut icon" href="https://www.assignmentworkhelp.com/wp-content/uploads/2018/08/icon1.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="./globals.css">
<?php
if (isset($_GET['name'])) {
    $name = $_GET['n'];
}
?>

<title>AssignMate | <?php
                    if (isset($_GET['name'])) {
                        $name = $_GET['n'];
                    }
                    ?></title>