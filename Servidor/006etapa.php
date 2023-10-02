<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    $edad = $_GET['edad'];

    if($edad<3){
        echo "bebe";
    }
    if($edad >=3 AND $edad<=12){
        echo "niño";
    }
    if($edad >=13 AND $edad<=17){
        echo "adolescente";
    }
    if($edad >=18 AND $edad<=66){
        echo "adulto";
    }
    if($edad >=67){
        echo "jubilado";
    }
    ?>
</body>

</html>