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
    <h1>Catalogo de vehiculos </h1>

    <form method="POST" action="{{route ('vehiculos.update',['vehiculo'=>$vehiculo->id_vehiculo])}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <div class="mb-3">
            <label for="id_vehiculo" class="form-control">Id vehiculo</label>
               <input type="Text" class="form-control" id="id" aria-describedby="id_vehiculo" name="id_vehiculo">
            <div  id="emailHelp" class="form-text" value="{{$vehiculo->id_vehiculo}}"> Id vehiculo </div>
          </div>
        <div class="mb-3">
          <label for="marca" class="form-label">Marca</label>
          <input type="text" required class="form-control" id="marca" aria-describedby="namehelp" name="marca" placeholder="Marca del vehiculo">
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" required class="form-control" id="modelo" aria-describedby="namehelp" name="modelo" placeholder="Modelo del vehiculo">
          </div>
          <div class="mb-3">
            <label for="año" class="form-label">Año</label>
            <input type="text" required class="form-control" id="año" aria-describedby="namehelp" name="año" placeholder="Año del vehiculo">
          </div>
          <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" required class="form-control" id="precio" aria-describedby="namehelp" name="precio" placeholder="Precio del vehiculo">
          </div>
          <div class="mb-3">
            <label for="kilometraje" class="form-label">Kilometraje</label>
            <input type="text" required class="form-control" id="kilometraje" aria-describedby="namehelp" name="kilometraje" placeholder="Kilometraje del vehiculo">
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" required class="form-control" id="tipo" aria-describedby="namehelp" name="tipo" placeholder="Tipo de vehiculo">
          </div>
        </select>
         <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route ('vehiculos.index')}}" class="btn btn-warning">Cancel</a>
        
         </div>
        
       
      </form>
   
  </body>
</html>