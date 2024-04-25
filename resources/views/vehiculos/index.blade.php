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
    <h1>Catalogo de vehiculos </h1>
    <a href="{{route ('vehiculos.create')}}" class="btn btn-success">Add</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">id vehiculo</th>
          <th scope="col">marca</th>  
          <th scope="col">modelo</th>
          <th scope="col">año</th>
          <th scope="col">precio</th>  
          <th scope="col">kilometraje</th>
          <th scope="col">tipo</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vehiculos as $vehiculo)
            
        <tr>
          <th scope="row">{{$vehiculo ->id_vehiculo}}</th>
          <td>{{$vehiculo ->marca}}</td>
          <td>{{$vehiculo->modelo}}</td>
          <td>{{$vehiculo ->año}}</td>
          <td>{{$vehiculo->precio}}</td>
          <td>{{$vehiculo ->kilometraje}}</td>
          <td>{{$vehiculo->tipo}}</td>
          <td>  
            <a href="{{route('vehiculos.edit',['vehiculo'=>$vehiculo->id_vehiculo])}}"
                class="btn btn-info">Edit</a>
              <form action="{{ route('vehiculos.destroy',['vehiculo'=>$vehiculo->id_vehiculo]) }}"
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