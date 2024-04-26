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
    <h1>Ventas </h1>
    <a href="{{route ('ventas.create')}}" class="btn btn-success">Add</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">id venta</th>
          <th scope="col">id vehiculo</th>  
          <th scope="col">id cliente</th>
          <th scope="col">fecha de venta </th>
          <th scope="col">precio final</th>  
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ventas as $venta)
            
        <tr>
          <th scope="row">{{$venta ->id_venta}}</th>
          <td>{{$venta ->id_vehiculo}}</td>
          <td>{{$venta->id_cliente}}</td>
          <td>{{$venta ->fecha_venta}}</td>
          <td>{{$venta->precio_final}}</td>
          <td>  
            <a href="{{route('ventas.edit',['venta'=>$venta->id_venta])}}"
                class="btn btn-info">Edit</a>
              <form action="{{ route('ventas.destroy',['venta'=>$venta->id_venta])}}"
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