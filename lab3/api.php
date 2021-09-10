<?php
$DB_HOST = 'praktikum.finki.ukim.mk';
$DB_NAME = 'isok171146'; //TODO
$DB_USER = '171146'; //TODO
$DB_PASS = '171146Lozinka'; //TODO
$DB_TYPE = 'mysql';
try {
    $dbo = new PDO("{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
    if (isset($_REQUEST['addNews']) && isset($_REQUEST['naslov']) && isset($_REQUEST['tekst'])) {
        $x = date("Y-m-d H:m:s");
        $naslov = $_REQUEST['naslov'];
        $tekst = $_REQUEST['tekst'];
        $sql = "insert into news (date, news_title, full_text) values ('$x','$naslov','$tekst')";
        $ps = $dbo->prepare($sql);
        $ps->execute();
        header("Location:/");
    } elseif (isset($_REQUEST['delete']) && isset($_REQUEST["id"])) {
        $id=$_REQUEST["id"];
        $sql = "DELETE FROM news WHERE news_id=:id";
        $ps = $dbo->prepare($sql);
        $ps->execute(['id'=>$id]);
        header("Location:/");

    } elseif (isset($_REQUEST['addComment'])&& isset($_REQUEST['id']) && isset($_REQUEST['author'])&& isset($_REQUEST['comment'])){
        $id=$_REQUEST['id'];
        $author=$_REQUEST['author'];
        $comment=$_REQUEST['comment'];
        $sql = "insert into comments (news_id, author, comment) VALUES ('$id','$author','$comment')";
        $ps = $dbo->prepare($sql);
        $ps->execute();
        header("Location:/comments.php?id=".$id);
    }

} catch (PDOException $exception) {
    echo $exception->getMessage();
}