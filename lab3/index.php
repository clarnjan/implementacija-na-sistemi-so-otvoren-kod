<?php
$DB_HOST = 'praktikum.finki.ukim.mk';
$DB_NAME = 'isok171146'; //TODO
$DB_USER = '171146'; //TODO
$DB_PASS = '171146Lozinka'; //TODO
$DB_TYPE = 'mysql';
try {
    $dbo = new PDO("{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
    $sql="select * from news";
    $ps=$dbo->prepare($sql);
    $ps->execute();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<div class="container">
    <a href="novostiAdmin.php">Add new News</a>

    <h1 style="text-align: center">News Panel</h1>
    <table class="table">
        <thead>
        <tr>
            <th>News id</th>
            <th>Date</th>
            <th>News title</th>
            <th>News Article</th>
            <th>Comments</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($ps as $row){
            $id=$row['news_id'];
            $sql="select count(*) from comments where news_id=$id";
            $a=$dbo->prepare($sql);
            $a->execute();
            $numComments=$a->fetchColumn();
        ?>
            <tr>
                <td><?=$row['news_id']?></td>
                <td><?=$row['date']?></td>
                <td><?=$row['news_title']?></td>
                <td><?=$row['full_text']?></td>
                <td><a href="comments.php?id=<?=$id?>">New Comment (<?=$numComments?>)</a></td>
                <td><a href="#">Edit</a></td>
                <td><a href="api.php?delete=delete&id=<?=$id?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php

} catch (PDOException $exception){
    echo $exception->getMessage();
}