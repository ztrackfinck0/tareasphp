<html>
    <body>
     <h1 align="center">12618. Practicando con formulas</h1>
     <table border="1" align="center">
        <tr>
            <td><h4>Puntos</h4></td>
            <td align="center">10.76</td>
            <td><h4>Limite de memoria</h4></td>
            <td align="center">32 <br>Mib</td>
        </tr>
        <tr>
            <td><h4>Limite de tiempo <br>
             (caso)</h4>
            </td>
            <td align="center">1 s</td>
            <td><h4>Limite de <br> tiempo (total)</h4></td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td><h4>Tamaño limite <br>
             de entrada <br> (bytes)</h4>
            </td>
            <td align="center">10 <br> Kib</td>
        </tr>
     </table>
     <h2>DESCRIPCION</h2>
     <p>
        Dado un valor real a , quieres resolver una serie de ecuaciones hasta obtener el valor de z.
    </p>
    <table align="center">
        <tr>
            <td align="center"><h4>x = 3a+15</h4></td>
        </tr>
        <tr>
            <td align="center"><h4>y = x+3 / x+1</h4></td>
        </tr>
        <tr>
            <td align="center"><h4>z = 5x+7y / a(x)(y)</h4></td>
        </tr>
    </table>
    <h2>ENTRADA</h2>
    <p>Un real a. Puedes suponer que 1 ≤ a ≤ 100.</p>
    <h2>SALIDA</h2>
    <p>Un real que sea el valor de impreso con tres puntos decimales.</p>
    <h2>EJEMPLO</h2>
    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">33.562</td>
            <td align="center">0.148</td>
        </tr>
        <tr >
            <td align="center">72.569</td>
            <td align="center">0.069</td>
        </tr>
        <tr >
            <td align="center">64.835</td>
            <td align="center">0.077</td>
        </tr>
    </table>

<?php
$a=33.562;
echo " <BR> EL VALOR DE a: ",$a, "<br>";
echo "x= 3*a + 15 <br>";
$x=(3*$a)+15;
echo "EL RESULTADO DE X ES: ",round($x,3), "<br>";
echo "y= x+3 / x+1 <br>";
$y=($x+3)/($x+1);
echo "EL RESULTADO DE X ES: ",round($y,3), "<br>";
echo "z= (5*x + 7*y) / (a*x*y) <br>";
$z=((5*$x) + (7*$y))/($a*$x*$y);
echo "EL RESULTADO FINAL ES: ",round($z,3),"<br>";

$a=72.569;
echo "EL VALOR DE a: ",$a, "<br>";
echo "x= 3*a + 15 <br>";
$x=(3*$a)+15;
echo "EL RESULTADO DE X ES: ",round($x,3), "<br>";
echo "y= x+3 / x+1 <br>";
$y=($x+3)/($x+1);
echo "EL RESULTADO DE X ES: ",round($y,3), "<br>";
echo "z= (5*x + 7*y) / (a*x*y) <br>";
$z=((5*$x) + (7*$y))/($a*$x*$y);
echo "EL RESULTADO  FINAL ES: ",round($z,3),"<br>";

$a=64.835;
echo "EL VALOR DE a: ",$a, "<br>";
echo "x= 3*a + 15 <br>";
$x=(3*$a)+15;
echo "EL RESULTADO DE X ES: ",round($x,3), "<br>";
echo "y= x+3 / x+1 <br>";
$y=($x+3)/($x+1);
echo "EL RESULTADO DE X ES: ",round($y,3), "<br>";
echo "z= (5*x + 7*y) / (a*x*y) <br>";
$z=((5*$x) + (7*$y))/($a*$x*$y);
echo "EL RESULTADO FINAL ES: ",round($z,3),"<br>";
 /*$x=5;
 $y=3;
 echo "Valores x ,y ",$x, " ",$y, " <br>";
 $x+=$y; //equivale a x=x+y
 echo "x: ",$x, "<br>";
 $x-=$y;//equivale a y=y-x
 echo "x: ",$y, "<br>";

 //operadores de incremento |++ |-- |--x |++x|
 $a=$x++;
 echo "a: ",$a, " x: ",$x, "<br>";
 $a=++$x; //++x o --x incrementara o disminuira 2
 echo "a: ",$a, " x: ",$x,"<br>";

 //operadores de pregunta if else con condicion and or
 if($a==$x and $x%2==1)
 {
    echo "CUMPLE CONDICION <BR>";
 }
echo "IMPRIME EL MAXIMO <br>";
 echo (max(2, 3, 12, 698, 0));*/

?>
    </body>
</html>