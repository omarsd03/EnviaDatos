<?php 

    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Factura</title>
</head>
<body>
    <h1>Total a pagar:</h1>
    <p>Precio: <?php echo $producto; ?> </p>
    <p>Producto: <?php echo $precio; ?> </p>
    <p>Cantidad: <?php echo $cantidad; ?> </p>
</body>
</html>