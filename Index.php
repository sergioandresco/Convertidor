<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor</title>
</head>

<body>
    <header style="background-color: skyblue;">
    <center>
        <h1>Hola esto es una prueba</h1>
        <h1>Convertidor de Monedas</h1>
    </center>
    </header>

    <section>
        <article style="background-color: skyblue;">
            <center>

                <form action="Index.php" method="POST">


                    <table>

                        <tr>
                            <td>Cantidad:</td>
                            <td><input type="number" name="cantidad"></td>
                        </tr>

                        <tr>
                            <td>Moneda:</td>
                            <td>
                                <select name="moneda">
                                    <option value="1">Peso Colombiano</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <input type="submit" value="Convertir">
                </form>

            </center>
        </article>
    </section>





</body>

</html>

<?php


    if($_POST){
        $cantidad =$_POST['cantidad'];
        $moneda = $_POST['moneda'];

        if($moneda==1){
            $dolares = $cantidad/4835;
            $euros = $cantidad/4818;
            $argentino = $cantidad/30.99;

            echo "<center><h2>$".round($dolares,6)." Dolares</h2></center>"."";
            echo "<center><h2>€".round($euros,6)." Euros</h2></center>"."";
            echo "<center><h2>$".round($argentino,6)." Pesos Argentinos</h2></center>"."";

        }
    }


?>

