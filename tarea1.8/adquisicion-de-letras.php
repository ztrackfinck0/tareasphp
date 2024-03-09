<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="decy.css">
</head>
<body>
    <h1>Adquisicion de letras</h1>
    <ul class="links">
        <li><a href="trabajoo1-8.html">Portada</a></li>
        <li><a href="adquisicion-de-letras.php">Adquisicion de letras</a></li>
        <li><a href="autores.php">Autores</a></li>
        <li><a href="bit-de-paridad.php">Bit de paridad</a></li>
    </ul>
    <form action="adquisicion-de-letras.php" method="post">
        letras:
        <input type="text" name="Letras"> <br>
        <input type="submit" value="Enviar"><br>
    </form>
    <?php
        if($_POST)
        {
            $Letras=$_POST['Letras'];
            $cont=0;
            $x=strlen($Letras);
            for($i=0; $i<$x; $i++)
            {
                if($Letras[$i]=='d')
                {
                    $cont++;
                }
            }
            echo $cont;
        }
    ?>
</body>
</html>