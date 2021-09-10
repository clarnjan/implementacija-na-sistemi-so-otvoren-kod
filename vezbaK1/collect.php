<?php
$errors = [];
session_start();

foreach ($_GET as $key => $value) {
    if (!isset($value) || $value == '') {
        array_push($errors, $key);
    }
}
if (!isset($_GET['pol']))
    array_push($errors, "pol");

if (!empty($errors)) {
    foreach ($errors as $key => $value) {
        echo $value . " is required <br>";
    }
} else {
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];
    $email = $_GET['email'];
    $pol = $_GET['pol'];

    if (isset($_COOKIE['sessionId']) && isset($_COOKIE['lastTime']) && time()-3600<$_COOKIE['lastTime']) {
        echo "Hello ".$_COOKIE['name'].", you are still logged in!!!! <br>";
    } else {
        setcookie("sessionId",session_id());
    }
    setcookie("lastTime", time(), time() + 100);

    if (isset($_COOKIE['name'])) {
        echo "Hello " . $_COOKIE['name'] . "<br>";
//        echo "you logged in: " . $_COOKIE['logInTime'] . "<br>";
    } else if (isset($_GET['zapamti'])) {
        setcookie("name", $ime, time() + 100);
//        setcookie("logInTime", time(), time() + 100);
    }

    echo "$ime <br> $prezime <br> $email <br>";
    if ($pol == 1)
        echo "masko";
    else
        echo "zensko";
    echo "<br>";
}
?>
