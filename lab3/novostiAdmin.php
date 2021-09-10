<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>News admin panel</title>
</head>
<body>
<div class="container">
    <h1>News Admin Panel</h1>
    <form method="post" action="api.php">
        <input type="hidden" name="addNews" value="addNews">
        <label class="col-sm-2 col-form-label">Naslov na novosta</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"name="naslov">
        </div>
        <label class="col-sm-2 col-form-label">Celosen tekst na novosta</label>
        <div class="col-sm-10 " >
            <textarea type="text" rows="5" class="form-control" name="tekst"></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>