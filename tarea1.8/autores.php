<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="decy.css">
</head>
<body>
    <h1>Autores</h1>
    <ul class="links">
        <li><a href="trabajoo1-8.html">Portada</a></li>
        <li><a href="adquisicion-de-letras.php">Adquisicion de letras</a></li>
        <li><a href="autores.php">Autores</a></li>
        <li><a href="bit-de-paridad.php">Bit de paridad</a></li>
    </ul>
    <form action="autores.php" method="post">
        Nombres:
        <input type="text" name="Nombres"> <br>
        <input type="submit" value="Enviar"><br>
    </form>
    <?php
    if($_POST)
    {
        $Nombres=$_POST['Nombres'];
        $a=strlen($Nombres);
        echo strtoupper($Nombres[0]);
        for($i=0; $i<$a; $i++)
        {
            if($Nombres[$i]=='-')
            {
                echo strtoupper($Nombres[$i+1]);
            }
        }
    }

    ?>
</body>
</html>