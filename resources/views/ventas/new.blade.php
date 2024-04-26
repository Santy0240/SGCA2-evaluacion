<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SGCA</title>
  </head>
  <body>
    <div class="container">
    <h1>Add venta</h1>

    <form method="POST" action="{{route ('ventas.store')}}">
        @csrf
        <div class="mb-3">
            <div class="mb-3">
              <label for="id_venta" class="form-control">Id venta</label>
                 <input type="Text" class="form-control" id="id" aria-describedby="id_venta" name="id_venta">
              <div  id="emailHelp" class="form-text"  > Id venta </div>
            </div>
          <div class="mb-3">
            <label for="id_vehiculo" class="form-label">id_vehiculo</label>
            <input type="text" required class="form-control" id="id_" aria-describedby="namehelp" name="id_vehiculo" placeholder="id vehiculo"  >
          </div>
          <div class="mb-3">
              <label for="id_cliente" class="form-label">id_cliente</label>
              <input type="text" required class="form-control" id="id_cliente" aria-describedby="namehelp" name="id_cliente" placeholder="id cliente" >
            </div>
        <div class="mb-3">
          <label for="fecha_venta" class="form-label">fecha de venta</label>
          <input type="date" required class="form-control" id="fecha_venta" aria-describedby="namehelp" name="fecha_venta" placeholder="fecha de la venta del vehiculo">
        </div>
        <div class="mb-3">
            <label for="precio_final" class="form-label">Precio final del vehiculo</label>
            <input type="text" required class="form-control" id="precio_final" aria-describedby="namehelp" name="precio_final" placeholder="precio final del vehiculo">
          </div>
          
        </select>
         <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route ('ventas.index')}}" class="btn btn-warning">Cancel</a>
        
         </div>
        
       
      </form>
   
  </body>
</html>