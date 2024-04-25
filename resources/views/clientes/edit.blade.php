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
    <h1>Listado de clientes </h1>

    <form method="POST" action="{{route ('clientes.update',['cliente'=>$cliente->id_cliente])}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <div class="mb-3">
            <label for="id_cliente" class="form-control">Id cliente</label>
               <input type="Text" class="form-control" id="id" aria-describedby="id_cliente" name="id_cliente">
            <div  id="emailHelp" class="form-text" value="{{$cliente->id_cliente}}"> Id cliente </div>
          </div>
        <div class="mb-3">
          <label for="marca" class="form-label">nombre</label>
          <input type="text" required class="form-control" id="nombre" aria-describedby="namehelp" name="nombre" placeholder="digite el nombre del cliente">
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">apellido</label>
            <input type="text" required class="form-control" id="apellido" aria-describedby="namehelp" name="apellido" placeholder="digite el apellido del cliente">
          </div>
          <div class="mb-3">
            <label for="año" class="form-label">telefono</label>
            <input type="text" required class="form-control" id="telefono" aria-describedby="namehelp" name="telefono" placeholder="telefono del cliente">
          </div>
          <div class="mb-3">
            <label for="precio" class="form-label">email</label>
            <input type="text" required class="form-control" id="email" aria-describedby="namehelp" name="email" placeholder="email del cliente">
          </div>
          <div class="mb-3">
            <label for="kilometraje" class="form-label">direccion</label>
            <input type="text" required class="form-control" id="direccion" aria-describedby="namehelp" name="direccion" placeholder="direccion del cliente">
          </div>
        </select>
         <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route ('clientes.index')}}" class="btn btn-warning">Cancel</a>
        
         </div>
        
       
      </form>
   
  </body>
</html>