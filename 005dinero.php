<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinero</title>
</head>
<body>
    <?php 
    $billetes = array(500, 200, 100, 50, 20, 10, 5);
    $cantidad = 138;

    foreach($billetes as $divisores){
        $contar = intdiv($cantidad, $divisores);
        if($contar >0){
            echo $contar;
            echo ($divisores >= 5) ? "billetes de $divisores" : "billetes de $divisores";
            echo "<br>";
            $cantidad %= $divisores;
        }
        else{
            echo $contar;
            echo ($divisores >= 5) ? "billetes de $divisores" : "billetes de $divisores";
            echo "<br>";
            $cantidad %= $divisores;
        }
    }
    ?>
</body>
</html>