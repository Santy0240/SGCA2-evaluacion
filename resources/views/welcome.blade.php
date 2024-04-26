<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENU inicial</title>
</head>
<body>
    <a href="{{route('vehiculos.index')}}" class="btn btn-custom btn-lg">vehiculos</a>
    <a href="{{route('clientes.index')}}" class="btn btn-custom btn-lg">Clientes</a>
    <a href="{{route('ventas.index')}}" class="btn btn-custom btn-lg">Ventas</a>
</body>
<style>
body {
    background: linear-gradient(to bottom, #333, #ffffff); /* Degradado de gris oscuro (#333) a blanco */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.btn-custom {
    background-color: #4CAF50; /* Color de fondo */
    color: white; /* Color del texto */
    border-color: #4CAF50; /* Color del borde */
    margin: 10px; /* Separación entre botones */
    padding: 10px 20px; /* Espaciado interno */
    transition: background-color 0.3s ease; /* Transición suave de color de fondo */
}

.btn-custom:hover {
    background-color: #45a049; /* Color de fondo al pasar el ratón */
    border-color: #45a049; /* Color del borde al pasar el ratón */
}

</style>
</html>