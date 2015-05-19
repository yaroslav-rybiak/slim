<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Database</title>
</head>
<body>
<?php include 'navbar.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php
            foreach($users as $email) {
                print $email . "<br />";
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body></html>