<html>
<head>
    <title>Vezba so formi</title>
</head>
<body>
<?php
?>
<form method='get' action='collect.php'>
    <h3>Registracija:</h3>
    Ime: <input type="text" name="ime" /> <br />
    Prezime: <input type="text" name="prezime" /> <br />
    Email: <input type="text" name="email" /> <br />
    Masko: <input type="radio" name="pol" value="1" />
    Zensko: <input type="radio" name="pol" value="0" /> <br />
    Zapamti me: <input type="checkbox" name="zapamti" value="checked"> <br/>
    <input type="submit" value="Vnesi" />
</form>
</body>
</html>
