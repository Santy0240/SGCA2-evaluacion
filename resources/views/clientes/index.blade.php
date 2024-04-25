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
    <div class = "container">
    <h1>Listado de clientes </h1>
    <a href="{{route ('clientes.create')}}" class="btn btn-success">Add</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">id cliente</th>
          <th scope="col">nombre</th>  
          <th scope="col">apellido</th>
          <th scope="col">telefono</th>
          <th scope="col">email</th>  
          <th scope="col">direccion</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clientes as $cliente)
            
        <tr>
          <th scope="row">{{$cliente ->id_cliente}}</th>
          <td>{{$cliente ->nombre}}</td>
          <td>{{$cliente->apellido}}</td>
          <td>{{$cliente ->telefono}}</td>
          <td>{{$cliente->email}}</td>
          <td>{{$cliente ->direccion}}</td>
          <td>  
            <a href="{{route('clientes.edit',['cliente'=>$cliente->id_cliente])}}"
                class="btn btn-info">Edit</a>
              <form action="{{ route('clientes.destroy',['cliente'=>$cliente->id_cliente]) }}"
                   method ='POST' style='display: inline-block'>
                   @method('delete')
                   @csrf
                   <input class= "btn btn-danger" type ="submit" value ="delete">
              </form>
            </td>
          </tr>
          
           @endforeach
            
            </form>
          </td>
        </tr>
        
        </tbody>
       </table>
    </div>      

  
  </body>
</html>