<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FABRICA DE GASEOSAS</title>
</head>
<body>
    <h1>Calculadora de Gaseosa</h1>
    
    <form method="post" action="">
        <label for="precioActual">Precio Actual de la Gaseosa (S/.):</label>
        <input type="number" name="precioActual" id="precioActual" step="0.01" required><br>

        <label for="cantidadComprada">Cantidad de Gaseosas Compradas:</label>
        <input type="number" name="cantidadComprada" id="cantidadComprada" min="1" required><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $precioActual = floatval($_POST['precioActual']);
        $cantidadComprada = intval($_POST['cantidadComprada']);

        
        $nuevoPrecio = $precioActual - ($precioActual * 0.05);

        
        $importeCompra = $nuevoPrecio * $cantidadComprada;

       
        $descuento = $importeCompra * 0.07;

        
        $importePagar = $importeCompra - $descuento;

       
        $obsequio = $cantidadComprada * 2;

        // Mostrar resultados
        echo "<h2>----------Resultados:------------</h2>";
        echo "Nuevo Precio de la Gaseosa: S/. " . number_format($nuevoPrecio, 2) . "<br>";
        echo "Importe de la Compra: S/. " . number_format($importeCompra, 2) . "<br>";
        echo "Importe del Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Importe a Pagar: S/. " . number_format($importePagar, 2) . "<br>";
        echo "Caramelos de Obsequio: " . $obsequio . "<br>";
    }
    ?>
</body>
</html>
