<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xss zoek</title>
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" name="zoekT" placeholder="zoek iets">
        <input type="submit" name="submit" value="zoek">
    </form>

        <?php 
            if(isset($_POST["submit"])) {
                echo "De zoekopdraht is $_POST["zoekT"]". "<br>";
                echo "Geen resultaat gevonden";
            }

        ?>
            
</body>
</html>
