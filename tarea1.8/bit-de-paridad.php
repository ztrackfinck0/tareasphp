<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="decy.css">
</head>
<body>
    <h1>Bit de paridad</h1>
    <ul class="links">
        <li><a href="trabajoo1-8.html">Portada</a></li>
        <li><a href="adquisicion-de-letras.php">Adquisicion de letras</a></li>
        <li><a href="autores.php">Autores</a></li>
        <li><a href="bit-de-paridad.php">Bit de paridad</a></li>
    </ul>
    <form action="bit-de-paridad.php" method="post">
        Inserte los bits
        <input type="text" name="z"><br>
        <input type="submit" value="Enviar"><br>
    <?php
    if($_POST)
    {
        $z=$_POST['z'];
        $cont=0;
        $a=strlen($z);
        for($i=0; $i<$a; $i++)
        {
            if($z[$i]=='1')
            {
                $cont++;
            }
        }
        if($cont%2==0)
        {
            echo $z, "0 <br>";
        }
        else
        {
            echo $z, "1 <br>";
        }
    }

    ?>
</body>
</html>