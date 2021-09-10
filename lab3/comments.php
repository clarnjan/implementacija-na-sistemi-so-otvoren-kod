<?php
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $DB_HOST = 'praktikum.finki.ukim.mk';
    $DB_NAME = 'isok171146'; //TODO
    $DB_USER = '171146'; //TODO
    $DB_PASS = '171146Lozinka'; //TODO
    $DB_TYPE = 'mysql';
    try {
        $dbo = new PDO("{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
        $sql = "select * from comments where news_id=$id";
        $ps = $dbo->prepare($sql);
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

            <h1 style="text-align: center">News Panel</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>comment_id</th>
                    <th>news_id</th>
                    <th>author</th>
                    <th>comment</th>
                    <th>approved</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($ps as $row) {
                    ?>
                    <tr>
                        <td><?= $row['comment_id'] ?></td>
                        <td><?= $row['news_id'] ?></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['comment'] ?></td>
                        <td><?= $row['approved'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <br>
            <br>
            <h1>New Comment</h1>
            <form method="post" action="api.php">
                <input type="hidden" name="addComment" value="addComment">
                <input type="hidden" name="id" value="<?=$id?>">
                <label class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10 ">
                    <input type="text" rows="5" class="form-control" name="author"></input>
                </div>
                <label class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-10 ">
                    <input type="text" rows="5" class="form-control" name="comment"></input>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
        </body>
        </html>
        <?php

    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}