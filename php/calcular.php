<?php 

    if(!isset($_POST)) {
        header('Location: ../index.html');
    }

    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    //$total = $precio * $cantidad;
    $subtotal = $precio * $cantidad;
    $formaPago = $_POST['formaPago'];

    if ($formaPago == 'Tarjeta') {
        $descuento = $subtotal * 0.20;
    }
    elseif ($formaPago == 'Cupon') {
        $descuento = $subtotal * 0.15;
    }
    else {
        $descuento = $subtotal * 0.10;
    }

    $total = $subtotal - $descuento;

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
    <h1>Factura</h1>
    <p>Producto: <?php echo $producto; ?> </p>
    <p>Precio: <?php echo $precio; ?> </p>
    <p>Cantidad: <?php echo $cantidad; ?> </p>
    <p>Forma de Pago: <?php echo $formaPago; ?> </p>
    <p>Subtotal: <?php echo $subtotal; ?> </p>
    <p>Descuento: <?php echo $descuento; ?> </p>
    <p>Total: <?php echo $total; ?> </p>
</body>
</html>