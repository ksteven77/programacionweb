<?php
$productos = array(
    array("id" => 1, "nombre" => "ZAPATOS", "imagen" => "img1.png", "descripcion" => "TENIS ZNCHILL LIGHTMOTION+", "precio" => 179.90),
    array("id" => 2, "nombre" => "CAMISETA", "imagen" => "img2.png", "descripcion" => "CAMISETA ADICOLOR 3 RAYAS", "precio" => 44.90),
    array("id" => 3, "nombre" => "CALENTADOR", "imagen" => "img3.png", "descripcion" => "PANTALÓN DE ENTRENAMIENTO ARGENTINA TIRO 23", "precio" => 94.90),

);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <center>
    <h1>CLASE PRÁCTICA 3</h1>
    <h2>by STEVEN QUISHPI VERA</h2>
    <p>Productos al Carrito de Compras</p>
    </center>
    <div id="listaProductos">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($productos); $i++) { ?>
                <tr>
                    <td><?php echo $productos[$i]["id"];?></td>
                    <td><img src="<?php echo $productos[$i]["imagen"];?>" alt="<?php echo $productos[$i]["descripcion"];?>" style="width: 100px; height: 100px;"></td>
                    <td><?php echo $productos[$i]["nombre"];?></td>
                    <td><?php echo $productos[$i]["descripcion"];?></td>
                    <td>$<?php echo $productos[$i]["precio"];?></td>
                    <td><button class="btn btn-primary" onclick="agregarAlCarrito(<?php echo $productos[$i]['id']; ?>)">Agregar al carrito</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        <h3>Carrito de Compras:</h3>
        <div id="carritoItems"></div>
    </div>

<script type="text/javascript">
    let productos = <?php echo json_encode($productos, JSON_PRETTY_PRINT); ?>;
</script>
<script src="script.js"></script>
</body>
</html>